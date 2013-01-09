--- 
layout: post
title: "Build your own Loochi: the plastic parts"
author: Thomas
permalink: /blog/build-your-own-loochi-the-plastic-parts/
category: General
tags: 
- Build Your Own
- lab
- prototype

status: publish
type: post
published: true
meta: 
  _edit_last: "2"
  dsq_thread_id: "943943425"
---

Our goal is to provide a completely open-source smart lamp that anyone can build and tinker with. We hope it will be the basis of many exciting projects in the next few months.

We have covered the electronics in great details but when you are building a lamp, the actual object matters at least as much as what's hidden inside! For many of us electronic or software geeks, actually building an object can seem quite scary and it would probably have been just a few years ago. However with recent progress in 3d printing, it has became incredibly easy!

[![loochi-lamp](/blog/img/loochi-lamp-300x200.jpg "loochi-lamp")](/blog/img/loochi-lamp.jpg "loochi-lamp](/blog/img/loochi-lamp-300x200.jpg "loochi-lamp")")

In this post, we will look at the different components that compose Loochi, describe their roles and how to build the plastic parts.
### Loochi's components

Loochi is made of 6 different parts shown in the picture below.

![loochi-d-exploded-view](/blog/img/loochi-d-exploded-view-300x300.jpg "loochi-d-exploded-view")

<!-- more -->


From top to bottom: 
1. The shade diffuses the light emitted by the LED. It is the easiest part to customize: as long as its bottom diameter is around 10cm, you will be able to sit it on top of the lamp. For an even better assembly, the shade can lock in the top part of the base with a 90° twist. 
2. The shade mount: This part is where the shade locks. It is also the upper-half of the base. It includes a small prism which reflects some of the light towards the bottom of the base to make sure that the entire shade is illuminated. 
3. The printed circuit board which has been covered in previous posts. 
4. The bridge carries the PCB. It has a couple of vents for the hot air to flow out of the heatsink. This part also contains a button which actuates a little switch on the PCB. On the opposite side is a hole for the power supply input. The shade mount snaps onto the bridge with 4 clamps. 
5. The heatsink holds onto the PCB with double-sided thermal tape. 
6. The bottom closes the lamp. It snaps onto the bridge with three clamps. There is only one way to put it in correctly: a little ergo shows that.

In this video, Jürgen takes apart the different components (note: heatsink is missing and the base is not painted yet).

### How to build your own

The three most complicated parts (excluding the PCB of course) are the shade-mound, the bridge and the base. We provide [STL files](https://github.com/tbideas/loochi-hardware/tree/master/loochi-v0.4/Plastic/Loochi_Design) for the three of them on our github so that you can easily 3D-print them. You can do it at home if you own a 3D printer. Be aware that the snaps are pretty small and you will need a good resolution to get them to work correctly.

You can also have them 3d printed by one of the online printing companies. We have tried [i.materialize](http://imaterialize.com/) and [Shapeways](http://www.shapeways.com/). If you do not want to upload the file yourself, you can even order the latest version from [our Shapeways shop](http://www.shapeways.com/shops/tbideas) (we do not make any money on that right now but this might become a way to support the project in the future).

Depending on the type of 3d printing you use, you might want to polish and paint the base. We used some sand-paper and a silver spray-paint to get the finish look.

### The shade

The shade can also be 3d printed. As of today, we only have one design in our github but many more are on the way. Just choose the one you like!

### Conclusion

There is a huge difference between a electric board in your lab and a lamp on your desk. With 3d printing you can fill that gap very quickly.

We like to think that you will take the bits you need from this project: if you are a software person, get the plastic 3d printed and order the electronic: focus your efforts on the app; if you are a 3d-designer, have fun making your own shades!

But, please do let us know what you have done with it!
