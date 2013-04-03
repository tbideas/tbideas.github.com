---
layout: post
author: thomas
title: NodeJS+RaspberryPi - The easy way with pijs.io
description: We love nodejs and wanted an easier way to use it to write programs for the Raspberry Pi. pijs.io let's you run programs on your raspberry pi from your browser.
---

JavaScript is a great programming language and lots of people are familiar with it. It should be no surprise that [many][nodepi1] [have][nodepi2] [compiled][nodepi3] nodejs for the Raspberry Pi and built npm packages [dedicated to it][npmpi1].

We love nodejs and the expressiveness of JavaScript is perfect for embedded applications, however, we felt that it was:
 * Still, too hard (and too long) to install nodejs on the Raspberry Pi
 * Not convenient to edit code directly on the pi
 * Hard to debug long running process

We aim to fill that gap with [pijs.io]. PiJS lets you write code for your Raspberry Pi in your browser, deploys automatically to your Raspberry Pi, restarts automatically when the RaspberryPi is rebooted and even gives you a web-console to watch what's going on.

Of course, it's completely free (to use - and open source) and you can start using it today. Let's walk through the initial setup.

<!-- more -->

## Step 1: Create an account on pijs.io

To get started, you need to create an account on [pijs.io]. We have tried to make this as easy as possible and you can use a facebook, twitter or github account to quickly connect without having to remember another login.

![Create an account on pijs](/blog/img/pijs-login.png)

## Step 2: Install pi-steroid on your Raspberry Pi

[pi-steroid] is a client that needs to be installed on your Raspberry Pi. It will be started automatically at startup, connect to [pijs.io] and wait for instructions.

We recommend that you start with a fresh and recent image of Raspbian. You can download it from the [official Raspberry Pi images][rpi-images] and follow their instructions to burn it onto a SDCard (we also have a summary for Mac users in our Getting Started guide).

On your Raspbian Raspberry Pi, login and execute the install script with this command:
    
    curl http://pijs.io/install-pijs.sh |bash

This will download a tar-gz package that contains nodejs, npm, the pi-steroid npm package and other dependencies.

![Installing pijs on your Raspberry Pi](/blog/img/pijs-install.png)

If you would rather compile from source, you can use the script `install-recompile-pijs.sh`. It will take approximately three hours to compile nodejs and install the packages.

## Step 3: Connect your Raspberry Pi to pijs.io

![pijs.io dashboard](/blog/img/pijs-connect1.png)

In [pijs.io] Dashboard, click on the button 'Add Device' you will see all of the Raspberry Pis that have connected to the platform but have not been claimed by a user. Based on the MAC address, identify yours in the list and click 'Add Device'.

![Add a new device to pijs.io](/blog/img/pijs-connect2.png)

## Step 4: Write your first program for the Pi

Next to your Pi, click the 'Edit Code' button and start writing some Javascript:

![Edit your code in pijs.io](/blog/img/pijs-editor.png)

As soon as you stop typing, the code will be saved and pushed to your device. In the console below the editor (or in the Dashboard) you will see the console output update in realtime.

Take a look in the examples section of the Documentation, you will find more interesting examples.

## Step 5: Send feedback!

This is a complete experiment, still in very alpha-stage:

 * Did you run into problems installing it?
 * Do you wish to see more features?
 * Would you like more examples?

Please take a minute to send some feedback in the comments below this post or by email: hello@tbideas.com. Thanks!

To be informed of update on the platform, you can also subscribe to the mailing list (on the homepage).


[nodepi1]: http://blog.tomg.co/post/21322413373/how-to-install-node-js-on-your-raspberry-pi
[nodepi2]: http://www.kitware.com/blog/home/post/433
[nodepi3]: http://jeelabs.org/2013/01/06/node-js-on-raspberry-pi/
[npmpi1]: https://npmjs.org/package/rpi-gpio
[pi-steroid]: https://github.com/tbideas/pi-steroid
[pijs.io]: http://pijs.io
[pirgb]: /blog/2013/02/controling-a-high-power-rgb-led-with-a-raspberry-pi
[rpi-images]: http://www.raspberrypi.org/downloads