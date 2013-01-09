--- 
layout: post
title: Design of the LED Driver (v0.2)
author: Thomas
permalink: /blog/design-of-the-led-driver/
category: General
tags: 
- Electronic Engineering

status: publish
type: post
published: true
meta: 
  _edit_last: "2"
  _thumbnail_id: "38"
  dsq_thread_id: "778053157"
  dsq_needs_sync: "1"
---

_Warning: this is a very technical post. If you are not into electrical engineering, you might get scared..._

In a true open-source spirit, we are releasing early (and intend to release often) the hardware of the LED driver board v0.2.

![board-v0.2](/blog/img/board-v0.2-300x219.png "board-v0.2")

As of this version, [illumi](http://www.tbideas.com/) is built around three boards:
- The LED driver board described in this post
- A motherboard that includes the main micro-controller and the Wifi chip
- A 100-240V power supply

<!-- more -->

We will release those two other boards as soon as they are in production.Please note that the final hardware will be very different from that and will be built around only one board.This board has a few inputs:
 - A 18/20V power supply capable of providing at least 2.5 A 
 - Most of this current is used by the high-power LED of course;
 - Three PWM signals to control the brightness of each color (Red, Green, Blue);
 - One signal (SHDN) to disable the card when we want to save power.

And a few outputs:
 - Three connectors to plug the LED. The current on those is limited to 700mA and of course modulated through the PWM inputs;
 - The temperature of the board measured next to each switching chip.
  
We provide the following elements under [the Creative Commons CC-BY-SA license](http://creativecommons.org/licenses/by-sa/2.0/):
 - [Schematics and Board design ](/blog/files/board-v0.2.zip)in Eagle PCB format
 - [Schematics](/blog/files/board-schema-v0.2.pdf) in PDF
 - [Bill of Material](/blog/files/board-v0.2-BOM.csv)
 - [Google sketchup model](/blog/files/board-v0.2-sketchup.zip) of the finalized board

Let us know if you would like anything else!