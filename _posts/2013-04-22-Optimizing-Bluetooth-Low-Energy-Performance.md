---
layout: post
author: thomas
description: Last week, I was working on Loochi's iOS application and spent some time trying to increase the frequency at which I could send updates from the app to the lamp. In this article, I share some of my experience tuning this with the Bluegiga BLE112 module. The short answer is that you should use CBCharacteristicWriteWithoutResponse for maximum speed. This made a huge improvement. 
---

Last week, I was working on Loochi's iOS application and spent some time trying to increase the frequency at which I could send updates from the app to the lamp.

In this article, I share some of my experience tuning this with the Bluegiga BLE112 module. The short answer is that you should use `CBCharacteristicWriteWithoutResponse` for maximum speed. This made a huge improvement. 

<!-- more -->

I tried different approach and used a scope to look at the SPI packets coming out of Loochi. For every write to the BLE112 module, a three bytes SPI command is sent. I am trying to send those commands as often as possible to provide really smooth animations.

When I started, the lowest latency between packets I could achieve was around 60ms.
 
## Idea #1: Request a connection update

A Bluetooth Low Energy device can request a connection update to the server. This means it can update some of the parameters of the connection. The one we are most interested in is the communication interval.

This is how to do this with the Bluegiga SDK:

    event connection_status(connection, flags, address, address_type, conn_interval, timeout, latency, bonding)
    	connected = 1

    	# Ask the connecting device to upgrade the connection with nicer values to increase throughput
    	# Min interval: 16*1.25 = 20ms (Apple minimum)
    	# Max interval: 32*1.25 = 40ms
    	# not changing the other parameters.
    	call connection_update(connection, 16, 16, latency, timeout)
    
    	# P0_4 is Chip Select - Default is high - active low
    	call hardware_io_port_write(0, $10, $10)
    	call hardware_io_port_config_direction(0, $10)
    end

Results with min=16 and max=32: Performance goes down (compared to not doing any updates), latency between SPI packets is between 80 and 100ms.

Results with min=16 and max=16. The Latency stable at 60ms.

Conclusion: Requesting a connection update is not effective in my scenario.
 
## Idea #2: Disable write ack

The application used acknowledged writes (`CBCharacteristicWrite`) and I tried switching to non-acknowledged writes.

This is how to define a property so that it is writable with and without acknowledgements:

    <service uuid="4FC10E26-F94A-480F-B1AF-6A2E299B7BF8" advertise="true">
    	<description>Loochi</description>
    	<characteristic uuid="BB4800AD-7F0C-4A59-8176-3316EBB236A7" id="color">
    		<properties write="true" write_no_response="true"/>
    		<value type="hex" length="3"/>
    		<description>Color projected by the lamp</description>
    	</characteristic>
    </service>

And in your iOS code, this is how to write without acknowledgement:

    [self.peripheral writeValue:[NSData dataWithBytes:rgb length:3] forCharacteristic:self.rgbChar type:CBCharacteristicWriteWithoutResponse];

Now the performance increase is huge. The intervals is divided by almost 10 for some packets. Every 10 or 20 packets there is a small lag of 20/30ms. This is much better than what I had before.

There is a big BUT though. The reason I used acknowledged write is because without acknowledgements, there is no way to make sure your packets has made it to the device, and if you keep sending too fast, the packets will pile up in an internal iOS buffer. After a few seconds, the pile is so big that there is a noticeable delay between the moment when you call the `writeValue:` method and the moment when the write is actually sent in the air.

I did a few tests and found that if I send a packet every 20ms, they dont get stuck in the radio and there is no lag. It is likely that this timing might change if the app goes to background, or if other apps are using the bluetooth radio.

## Idea #3: Configure the BLE112 for maximum throughput

I also tried [this advice][maximize-throughput] from the Bluegiga support forum (with and without acknowledgement) but did not see any real difference in throughput.

## Conclusion in the case of Loochi

For fast streaming updates such as a visual animation: use non-acknowledged writes and a timer set to send packets every 20 to 50ms (50hz to 20hz); this works quite well.

For secure writes (turn off the light; strobo effect), we can still use acknowledged writes because the module now supports both.


[maximize-throughput]: https://bluegiga.zendesk.com/entries/22400867--HOW-TO-Maximize-throughput-with-the-BLE112-BLED112
