---
author: thomas
category: Electronic

layout: post
---

![A Wifi weather station based on Elektor USB Weather logger](/blog/img/weatherstation.jpg)

Christmas brought its usual share of surprises and among them this year was an Elektor kit for a USB weather station (Yes my parents know me well ;).

This kit includes great sensors for temperature, pressure and humidity. It is designed to run on batteries for a very long time and you can plug it on your computer to download the data and plot them.

This is all very cool but in 2013, I really expect my weather station to upload it's measures to the internet automatically. And it took about an afternoon and a $40 module to do just that ...

<!-- more -->

## The Elektor USB weather logger

This Elektor kit is built with thru-holes components and is very easy to build. Its architecture is described in detail in [Elektor's article][elektor-weatherlogger] (full content available online - just log in for the schematics) and is built around:
 * An Atmel Atmega88 micro-controller
 * A very low power consumption LCD and three buttons for the interface
 * Two sensors connected thru an I2C bus
 * An Elektor BOB-FT232R which is a USB-serial interface designed by Elektor around an FTDI chip and sold already assembled

This weather logger is a great base for some fun:
 * It includes very accurate captors (they are pre-calibrated at the factory) that will give you high quality temperature, pressure and humidity measurements: it's much better that what you can do with an LM35 on an ADC;
 * It is designed for very low power consumption (hardware+software)
 * It is a very easy to build kit. The only problem is that Elektor does not sell the kit with all the components. You have to scout around the Internet to find them (mouser, farnell, etc - let me know if you need help with that).

Once built and powered up, I quickly discovered some serious shortcomings:
 * The interface is pretty slow (the micro-controller sleeps most of the time so you have to hold the buttons for a while), not intuitive and will remind you of a very old alarm clock...
 * Which brings me to the time: the station loses time every time you power it off. I would not mind except that when the time is not set correctly, it will be very hard to match the recorded data to actual time. _(Elektor published an [update to this project][elektor-updatedcf] that includes a DCF radio clock. I have not tried it.)_
 * And finally, you need to plug it in a computer to get the data, use a terminal program and copy/paste the raw data (coming at 9600bps so you will also wait a while) into a text file to get a Gnuplot graph.

Clearly there is a better way to do this.

## How to connect your weather station to the Internet

I had a Rovio RN-XV module lying around from [my first Illumi/Loochi experiments][illumi-101]. This module takes 3.3V and has a serial interface. Once configured properly, it can take any data received on the serial port and send it to a web server with an HTTP request.

I thought this would be perfect for this project. I would configure the wifi module to talk to a server of mine and do a very simple modification to the Atmega88 firmware so that it would send on the serial output the three measurements every minute.

### Step 1 - Connect the Wifi RN-XV module to your computer

Get a [Rovio RN-XV module][sparkfun-roviornxv] (~$35). If you already have the weather station this is the only thing you will need to buy.

This module needs to be powered with a 3.3V power supply and we will plug it to a computer to do the initial configuration. 

_I am assuming you have built the Elektor kit, which means you probably have a BOB-FT232R and you can use it to connect the module to your computer. If you dont, you can use any USB-serial converter as long as it logic levels are 3.3V. (You have been warned: 5V will kill the wifi module)._

The connections are very simple:
 * Pin 1 of the RN-XV module is VCC (Remember: 3.3V only!) - Connect it to pin 2 on the BOB
 * Pin 10 of the RN-XV module is Ground - Connect it to pin 4 on the BOB
 * Pin 2 is TX - Connect it to pin 7 (RX) on the BOB
 * Pin 3 is RX - Connect it to pin 8 (TX) on the BOB

Note: the pin numbers for the RN-XV start at top-left corner in the datasheet. You will only use the left side. There are no "official" pin numbers for the BOB. Since we will only use the right side, I am counting pins from the top-right.

[![How to connect the BOB FT232R to Rovio RN-XV module](/blog/img/connect-bob-to-rnxv-small.jpg
)](/blog/img/connect-bob-to-rnxv.jpg)
 
_Note: The RN-XV module can use as much as 240mA when its radio is on. The BOB provides a regulated 3.3V output that is rated for no more that 50mA. It worked very well for me but if you see the module rebooting for no reason you might need to plug the Wifly to an external regulated 3.3V power supply._

### Step 2 - Configure the RN-XV module

Plug the USB cable, open a serial terminal program at 9600 8 N 1 (on MacOS, I recommend the free and very nice [CoolTerm][coolterm]). Unplug and replug the module VCC pin, you should see startup messages from the module:

    WiFly Ver 2.32, 02-13-2012 on RN-171
    MAC Addr=00:06:66:42:42:42
    Auto-Assoc roving1 chan=10 mode=NONE FAILED
    *READY*
    *ERR WATCHDOG*Auto-Assoc roving1 chan=10 mode=NONE FAILED
    Auto-Assoc roving1 chan=10 mode=NONE FAILED
    Auto-Assoc roving1 chan=10 mode=NONE FAILED

Press `$$$` to enter command mode (only the $ key three time; do not press enter). The module will reply with `CMD`. You are now in command mode, ready to send commands.

Configure your Wifi network with the command `set wlan auth 3` (WPA1/WPA2), `set wlan ssid` and `set wlan phrase`. _If you are using WEP, read the [manual][wifly-manual] - you should not be using WEP anymore anyway._

    $$$CMD
    <2.32> 
    set wlan auth 3
    AOK
    <2.32> 
    set wlan ssid my_ssid
    AOK
    <2.32> 
    set wlan phrase my_passphrase
    AOK
    <2.32> 
    set wlan hide 1
    AOK
    <2.32> 
    save
    Storing in config
    <2.32> 
    reboot

`set wlan hide 1` will make sure that someone can not get the passphrase from the module. `save` and then `reboot` do exactly what they say and then you should see this:

    *Reboot*.WiFly Ver 2.32, 02-13-2012 on RN-171
    MAC Addr=00:06:66:42:42:42
    Auto-Assoc sarfata2 chan=3 mode=WPA1 SCAN OK
    Joining sarfata2 now..
    *READY*
    Associated!
    DHCP: Start
    DHCP in 2261ms, lease=864000s
    IF=UP
    DHCP=ON
    IP=192.168.0.50:2000
    NM=255.255.255.0
    GW=192.168.0.1
    Listen on 2000

If you see an IP address, it means your module found your wifi network, connected to it and got a DHCP reply. This is all good.

Now we want to configure the module so that it automatically sends to a webserver everything it gets on the serial port.

First, get into command mode again (type `$$$`).
    
    $$$CMD
    
Connect to io.tbideas.com, use DNS to resolve the domain name and use port 80 (http).

    set dns name www.sarfata.org
    set ip host 0
    set ip remote 80

Act as an HTTP client, send a GET request to the page `/weather-station/?`

    set ip proto 18
    set com remote GET$/weather-station/?

When the module gets something on the serial port it will wait 2000ms for more data before actually sending the data appended to the GET url. It will also add some information like the MAC address of the weather station.

    set com time 2000
    set uart mode 2
    set option format 17

I had to limit the power of the module otherwise it takes too much current and the regulator on the weather station shuts down to protect itself which reboots the wifi module. You can set the power from 1 to 12 dBm. With 6dBm the maximum current is 175mA which is in the range supported by the regulator.

    set wlan tx 6
    
Those last two commands are optional, I recommend you only do it when everything works well: Let the module be woken up by incoming bytes on the serial port and automatically go to sleep after 10 seconds of activity.

    set sys trigger 1
    set sys sleep 10
    
This is NOT optional - save the changes to the config and reboot!

    save
    reboot

You can make sure that things work well: when the module reboots it is not in command mode anymore. Just type a few characters at the prompt and wait 2 seconds. The module will make the HTTP request to the web server and print on the console the reply from the server.

### Step 3 - Re-compile the firmware of the board

Now we need to do a small change to the firmware of the Atmega88: we need the weather station to send its measures on the serial port every minute.

The source code is available for free from Elektor. I have hosted it on github and applied a very simple patch to do just that. My changes are very simple, you can [review them on github][github-diff].

[Download][github-wx-download] (or [clone][github-wx-clone]) the [github project][github-weatherstation] onto your computer. 

You need an AVR programmer to flash the microcontroller. I am not going to describe this here, many resources are available online. Let me know in the comments if you need more help with that.

Edit the Makefile and at line 257 set the variable `AVRDUDE_PROGRAMMER` to the name of your progrmamer (mine is `usbtiny`).

Run the command `make program` to reprogram the firmware onto the board (You can also take the .hex file and use a graphical programmer if you are into that).

    $ make program
    avrdude -p atmega88 -P usb -c usbtiny -B 10 -U flash:w:build/weather_station.hex 
    
    avrdude: AVR device initialized and ready to accept instructions
    
    Reading | ################################################## | 100% 0.00s
    
    avrdude: Device signature = 0x1e930a
    avrdude: NOTE: FLASH memory has been specified, an erase cycle will be performed
             To disable this feature, specify the -D option.
    avrdude: erasing chip
    avrdude: reading input file "build/weather_station.hex"
    avrdude: input file build/weather_station.hex auto detected as Intel Hex
    avrdude: writing flash (8164 bytes):
    
    Writing | ################################################## | 100% 21.90s
    
    avrdude: 8164 bytes of flash written
    avrdude: verifying flash memory against build/weather_station.hex:
    avrdude: load data flash data from input file build/weather_station.hex:
    avrdude: input file build/weather_station.hex auto detected as Intel Hex
    avrdude: input file build/weather_station.hex contains 8164 bytes
    avrdude: reading on-chip flash data:
    
    Reading | ################################################## | 100% 15.19s
    
    avrdude: verifying ...
    avrdude: 8164 bytes of flash verified
    avrdude: safemode: Fuses OK
    avrdude done.  Thank you.

Now, make sure the weather station still works. My patch does not change anything to the UI so it should work as before.
    
### Step 4 - Connect the weather station to the Rovio RN-XV

Power the Rovio RN-XV from the ICSP port and connect the TX pin of the weather-station to the RX pin of the RN-XV module.

[![Connect the Rovio RN-XV module to the Elektor weather station](/blog/img/connect-rnxv-to-weatherstation-small.jpg)](/blog/img/connect-bob-to-rnxv.jpg)

Wait a minute (at most) and in your web server logs, you should see data coming in:

    81.56.67.64 - - [01/Jan/2013:19:40:36 +0000] "GET /weather-station/?value=temp=212&humidity=55&pressure=10070&mac=00:06:42:42:42:42&bss=3a:42:42:42:42:42&rtc=20&bat=3074&io=520&wake=1&seq=2&cnt=1&rssi=b3 HTTP/1.0" 200 3802 "-" "-"

I have built a [simple nodejs][github-ubijs] script to take this request and convert it into a Cosm API call. You can get [realtime access][cosm]. In case it's unplugged when you read this, this is what I get:

![Screenshot of my Cosm feed](/blog/img/weatherstation-cosm-screenshot.png)

And this is the temperature (updated in realtime), embedded in this page with our colors! 

![Cosm Realtime feed](https://api.cosm.com/v2/feeds/95558/datastreams/temp.png?width=730&height=250&colour=%2369C1E7&duration=1day&title=Temperature&show_axis_labels=true&detailed_grid=true&scale=auto&timezone=UTC)

## Conclusion

I think this simple example proves that it is quite simple to connect your projects to the Internet! With modules like the RN-XV (Bluegiga has a similar product too) it is extremely easy to connect any microcontroller based board to a web service.

I hope you will find this useful and would be glad to help you repeat this setup. If you do not want to deploy your own webserver, you are welcome to use ours. Just send me an email with the mac address of your wifly module so that I can differentiate your requests from mine. I will forward your measurement to your own Cosm account.
I could also offer to send pre-programmed Atmega88 to those of you who do not own an AVR programmer.

Let us know in the comments what you think and how we can help!

[elektor-weatherlogger]: http://www.elektor-projects.com/project/usb-long-term-weather-logger.12037.html
[elektor-updatedcf]: http://www.elektor.com/magazines/2012/november/usb-weather-logger-time-synched.2292184.lynkx?tab=4
[illumi-101]: /blog/illumi-101-iphone-controlled-rgb-light/
[sparkfun-roviornxv]: https://www.sparkfun.com/products/10822
[coolterm]: http://www.google.com/?q=coolterm
[wifly-manual]: http://www.google.com/?q=wifly+manual
[github-weatherstation]: http://www.github.com/sarfata/wifi-wx-station/
[github-diff]: https://github.com/sarfata/wifi-wx-station/commit/2a7f886fe0316e6c6a5eb622cb5cadd9a84c27e5
[github-wx-download]: https://github.com/sarfata/wifi-wx-station/archive/master.zip
[github-wx-clone]: https://github.com/sarfata/wifi-wx-station.git
[github-ubijs]: http://www.github.com/sarfata/ubijs/
[cosm]: https://cosm.com/feeds/95558