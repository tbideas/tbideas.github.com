--- 
layout: post
title: "Illumi 101: Build an iPhone controlled RGB light under an hour"
author: Thomas
permalink: /blog/illumi-101-iphone-controlled-rgb-light/
category: General
tags: 
- Build Your Own
- Electronic Engineering

status: publish
type: post
published: true
meta: 
  _edit_last: "2"
  dsq_thread_id: "796717765"
---

_This is the first post in a series of article on how to build your own Illumi lamp and how to develop for it. This first article gives you the very basic information you need to get started doing some programming if you dont have much soldering skills._

It will still be a few weeks before the well-polished Illumi is available for distribution in quantities but if you are a developer and want to start working on your own apps that connects and talks to Illumi, we want to show you how to get started today!

![Illumi v0](http://www.tbideas.com/blog/wp-content/uploads/2012/08/illumi-v0.jpg)

In this post, we will show you how to connect a basic RGB Led to an Arduino micro-controller and connect to it with your iPhone. Of course, it will not make a lot of light, but it is enough to start programming. You do not even need to solder.

This is what we call Illumi v0, our very first prototype!

<!-- more -->

## What you will need
- An [Arduino Uno](http://arduino.cc/en/Main/ArduinoBoardUno/) board (or compatible) (~$25)
- A [Arduino Wireless SD Shield](http://arduino.cc/en/Main/ArduinoWirelessShield) (~$30)
- A [Wifly RN-XV](https://www.sparkfun.com/products/10822) wireless module (~$40)
- One RGB led and three 330 ohms resistors ($1?)

If you do not want to solder the parts on the Wireless Shield, you can use a breadboard. [Seeedstudio](http://www.seeedstudio.com/) has a pretty good package called the [Arduino Sidekick](http://www.seeedstudio.com/depot/arduino-sidekick-basic-kit-p-775.html) for $20 which includes a breadboard, breadboarding wires, the RGB Led and the resistors.

Total costs, approximately $100 but there is so much you can do with those!
## The "schematics"

![Illumi v0 Schema](http://www.tbideas.com/blog/wp-content/uploads/2012/08/illumi-v0-schema.png)

If you are using a common cathode LED (it is the type included in the Arduino Sidekick), you need to provide +5V to the common cathode and connect the three other pins (one pin for each color) to your Arduino outputs 9, 10 and 11. We use those outputs because the Arduino micro-controller can do pulse-width-modulation on those pins which will allow us to control very precisely the brightness of each led.

With a common Cathode LED, we need to set the output to 0V to turn the light on. When the output is at +5V, the electrical potential difference between the anode and the cathode of the LED will be: 5-5=0V and so there will be no current and the LED will be off. When you drive the output to 0V, the electrical potential difference will be 5-0=5V, there can be a current and the LED will be on. So the output will actually be inverted: off will turn on the light, and on will turn off the light. We will get back to that when we get to programming the Arduino.

If you are using a common anode LED, you will need to connect the common anode to ground instead of +5V.
## Breadboarding

If you do not want to solder anything, just connect the LED and the resistors as shown in the schema below.

![Illumi breadboard](http://www.tbideas.com/blog/wp-content/uploads/2012/08/illumi-v0-breadboard.png)
## Solder the parts

If you know how to use a soldering iron, it is really easy to solder the parts on to the wireless sd shield. You will save on the breadboard but mostly you will have a small and cute design that you can take anywhere. Because you can power it from any USB charger, it will be very easy to drop it in a corner of your room and play with it remotely.

![Illumi v0 PCB](http://www.tbideas.com/blog/wp-content/uploads/2012/08/illumi-v0-board.png)
## Program the Arduino

Download the Illumi sketch files from our [github](https://www.github.com/tbideas/illumi/). You will need to customize the ssid of your network, the pins for the LEDs and define whether it is a common-cathode or common-anode LED. This is all done very easily at the top of the main file (illumi.ino).

Plug a USB cable into your Arduino, make sure the switch on the wireless sd shield is in the USB position and program your arduino.

When the programming is done, flip the switch to the MICRO position and let the micro-controller talk to you wifly. It will blink red while it is trying to get the wifly up and then blink green when it has initialized the wifly module and is trying to reach your wifi network. When the network is joined, it will glow blue for five seconds and then wait for command from your iPhone app.
## Run the iPhone app

Get the iPhone application source from our [github](https://www.github.com/tbideas/illumiapp/) and run it. It will automatically detect all lamps on your networks thanks to the broadcast UDP packets the Wifly module sends automatically to port 14484. When it gets one, it will list the lamp and you can click on it and start sending colors.

![Illumi v0](http://www.tbideas.com/blog/wp-content/uploads/2012/08/illumi-v0-app-e1343953612682.png)

If you dont like the color choices of the default image, pick an image from your photo library!
## What now?

Well, you can hack the app to program some cool new features! If you want a more powerful LED (and you will!), wait for more articles explaining how to control high power LEDs with your Arduino, or get your very own Illumi when it's available!
