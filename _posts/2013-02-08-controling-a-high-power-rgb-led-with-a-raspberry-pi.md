---
layout: post
author: thomas
description: Learn how to connect a high power LED to a Raspberry Pi and how to control it to produce thousands of colors. You will also learn how to use the Pi for PWM of the pins!
---

We recently decided to start moving our efforts from Arduino to the Raspberry Pi. Arduino is great for embedded projects and has served us well but connecting an Arduino to the Internet is extremely expensive: paying $100 for a micro-controller and a wifi board is not a good start for an embedded project.

![A raspberry Pi meets a high power LED driver](/blog/img/raspberrypi-meets-led.jpg)

One of the limitations of the Raspberry Pi is that it offers only one PWM output. Some people work around this by plugging a raspberry pi to an arduino or using external PWM generator but we were looking for something simpler and cheaper.

In this article we will show you how we connected a Raspberry Pi to a high power RGB led. Our solution does not require any other hardware and is extremely easy to reproduce!

<!-- more -->

## Driving a high power LED

For this article, we are using a 40W LED from Ledengin. This LED requires a 18V voltage and we need to limit the current at 700mA. To do this, we will use the led driver board that we designed for Arduino but that will work just fine here. 

We mentioned this board before, shared some [pictures] and of course the [schematics]. This is all open-hardware.

![High power LED driver](/blog/img/raspberrypi-leddriver.jpg)

This driver requires 4 inputs: 
 * 1 on/off input to enable the driver or completely disable it (which also helps save power) 
 * 3 PWM signals to control the intensity of each channel: red, green and blue.
Our board already runs on 3.3V so we will not need any level-changer when connecting it to Arduino. Just do not forget a fifth wire to have a common ground.

We have done some tests and found out that the minimum PWM frequency to remove any kind of flickering is 100Hz.


## Raspberry Pi and PWM

Raspberry Pi is a pretty cool platform. You get a board not much bigger than an Arduino, it runs Linux, comes with an Ethernet board and for an extra $10 you get wifi: a perfect base for a connected object - under $50. 

There is one downside however: it does not come with as many PWM pins. Only one is offered and that is not enough when you want to drive external peripherals like servos, rgb leds, or anything else that requires more than a on/off signal.

One solution that I have seen people use is to plug an Arduino to the Raspberry Pi (through USB) but it increases seriously the cost of the package and seems a little overkill. I think it only makes sense if you are just building a quick prototype.

I did not want to go down that road because I want to keep the complexity and the costs down.

Another solution is to use an I2C or SPI device that will be controlled from the Raspberry Pi and will generate a PWM signal to control the LED driver. I think this would be the best option but I had none of those available and being currently in Dakar (Sénégal), I cant really walk to the nearest shop to get one or wait for Mouser to deliver.

My next option was to look online for a way to do software PWM on the Raspberry PI but most of what I found came with huge warnings: software PWM in a multi-task operating system gives very bad results and the pulse are far from regular.

## Enters ServoBlaster

[ServoBlaster][servoblaster] is a project developped by Richard Hirst that generates eight variable width pulses in software to control servos. Of course Richard knew that if he did this in software with a while loops and some sleeps, the pulse would not be clean enough to drive servos.

So he came up with a brilliant idea: use the DMA controller to control the state of the pins. He creates a circular buffer of commands and sends it to the DMA controller. Thanks to the PWM engine of the Pi, one command is triggered every 10us. With a circular buffer of 2000 commands, he can control the value of the IO pins every 10us in a cycle of 20ms.

ServoBlaster is available under the GPL v3 license and is available as a kernel module or a user-space daemon. 

However ServoBlaster is designed to generate the pulse of one servo, then another one, etc. So the maximum pulse length is only `20ms / 8 = 2.5ms`, which corresponds to a PWM of 12.5%. This is clearly not good if you want to drive LEDs where you need to adjust the value from 0% to 100%.

## And pi-blaster

So I took Richard's code and adapted it to generate variable length pulses. In my version, all the pulses start together which is great for driving LEDs.

![PWM pulses seen on a scope](/blog/img/raspberrypi-pulses-on-scope.jpg)

The code is open-source as well and available on github under the name [pi-blaster][github].

Just compile it with `make` and then start the daemon `sudo ./pi-blaster`. You can now set the value of each pins with simple write to `/dev/pi-blaster`.

For example, to set the first pin to 50% pwm:

    echo "0=0.5" > /dev/pi-blaster
    
To clear the second pin:

    echo "1=0" > /dev/pi-blaster
    
And to set pin 1 to on (on all the time):

    echo "0=1" > /dev/pi-blaster

One thing to note is that all the pins will be set to output and you can no longer use them as inputs. This is something we could work around if needed. Let me know if this is important to you or submit a pull-request on github!

## Conclusion

![Raspberry Pi drives a high power led](/blog/img/raspberrypi-lightoutput.jpg)

I can now drive my 40W RGB Led from my raspberry pi (and make myself blind), from the command line. Of course I also want to do that from higher level language and this will be the subject of another article. [Follow us][twitter] on twitter to stay in touch!


[pictures]: /blog/some-pictures-of-our-latest-prototype/
[schematics]: /blog/complete-source-files-for-illumi-v0-2/
[servoblaster]: https://github.com/richardghirst/PiBits/tree/master/ServoBlaster 
[pi-pwm]: http://www.raspberrypi.org/phpBB3/viewtopic.php?f=37&t=22923
[github]: http://www.github.com/sarfata/pi-blaster/
[twitter]: http://www.twitter.com/tb_ideas/