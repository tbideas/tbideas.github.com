--- 
layout: post
title: Some pictures of our latest prototype
author: Thomas
permalink: /blog/some-pictures-of-our-latest-prototype/
category: General
tags: 
- General

status: publish
type: post
published: true
meta: 
  _edit_last: "2"
  dsq_thread_id: "808496151"
  dsq_needs_sync: "1"
---

So we have been so busy building and experiment with our latest prototypes that we almost forgot to share some pictures with you.

We did share some on facebook but for those of you who are following here on the blog, here they are!

## Illumi v0.2

This is the prototype (actually one of them, we have built three) running in the living room next to a LCD TV and a roof lightbulb (above the door) to give you a rough idea of the LED power.

![Illumi in a living room](http://www.tbideas.com/blog/wp-content/uploads/2012/08/prototype-v0.2-1.jpg)

We are pretty happy with the power of this prototype. It gives _a lot_ of light and the driver heats reasonably. It is a much more sustainable solution than the first linear driver (that was described in [another post](http://www.tbideas.com/blog/build-an-arduino-shield-to-drive-high-power-rgb-led/); it's still a nice solution if you want something cheap and quick to build for development).

More pictures after the break!

<!-- more -->

## The LED Driver

First test of one channel of the LED driver and ... it works! The LED did not burn.

![Illumi in a living room](http://www.tbideas.com/blog/wp-content/uploads/2012/08/prototype-v0.2-2.jpg)

This is what the LED driver looks like once completely assembled.

![Illumi in a living room](http://www.tbideas.com/blog/wp-content/uploads/2012/08/prototype-v0.2-3.jpg)

And here I am testing the new driver. I had not plugged it into a micro-controller yet, so I am using an experimentation board to send +3.3 or GND to each pwm pin.

![Illumi in a living room](http://www.tbideas.com/blog/wp-content/uploads/2012/08/prototype-v0.2-4.jpg)

This is the 1Mhz switching at the output of one of the LT3518 LED driver.

![Illumi in a living room](http://www.tbideas.com/blog/wp-content/uploads/2012/08/prototype-v0.2-5.jpg)

And as you can see, the LED is receiving just a little less of 600mA (we might boost that a little bit).

![Illumi in a living room](http://www.tbideas.com/blog/wp-content/uploads/2012/08/prototype-v0.2-6.jpg)

## The micro-controller board (aka the _motherboard_)

We have not had time to post the schematics for this one but I hope to do that this week-end.

This is a corner of the Atmega 32u4 and some 0805 capacitors.

![Illumi in a living room](http://www.tbideas.com/blog/wp-content/uploads/2012/08/prototype-v0.2-7.jpg)

This is the board fully assembled, only the bluetooth 4 module is missing in the top left corner.

![Illumi in a living room](http://www.tbideas.com/blog/wp-content/uploads/2012/08/prototype-v0.2-8.jpg)

And here the board is complete.

![Illumi in a living room](http://www.tbideas.com/blog/wp-content/uploads/2012/08/prototype-v0.2-9.jpg)
