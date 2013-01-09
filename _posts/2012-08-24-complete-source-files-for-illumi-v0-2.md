--- 
layout: post
title: Complete source files for Illumi v0.2
author: Thomas
permalink: /blog/complete-source-files-for-illumi-v0-2/
category: General
tags: 
- Build Your Own
- Electronic Engineering

status: publish
type: post
published: true
meta: 
  _edit_last: "2"
  dsq_thread_id: "816246934"
---

We are about to start work on the next prototype!

Before we do, we wanted to close the 0.2 version and make sure we had everything published. It is all on [our github account](https://github.com/tbideas/illumi-hardware).

## Main features

It is a dual-board design: a board with the micro-controller and the Wifi card, and another board with the LED drivers.

Features of the motherboard:
- Arduino-Leonardo clone running at 8Mhz - Programmable via a ICSP connector or through the USB cable (once the bootloader has been burnt). You can use the Arduino IDE to program it.
- Wifi module RN-171 from Roving Networks with a wire antenna
- Bluetooth 4 Low Energy BLE112 module from Bluegiga
- Only 75mm by 50mm
- Switching 3.3 V power supply

Features of the LED driver
- Input voltage from ~5V to 20V (depends on the type of LED you want to power) - Compatible with all sorts of high power LEDs
- Three LT3518 swiching regulator for a 700mA constant current source to drive one RGB led
- PWM inputs to control the brightness of each component: Red, Green, Blue
- Shutdown pin to turn off the regulators and save power
- Three temperature sensors to measure the board temperature

More information and known problems in the [README on github](https://github.com/tbideas/illumi-hardware/blob/master/README.md).
