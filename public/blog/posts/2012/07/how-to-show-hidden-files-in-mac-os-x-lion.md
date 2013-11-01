<!--
id: 27035320303
link: http://blog.hengkiardo.com/post/27035320303/how-to-show-hidden-files-in-mac-os-x-lion
slug: how-to-show-hidden-files-in-mac-os-x-lion
date: Thu Jul 12 2012 12:56:00 GMT+0700 (WIT)
publish: 2012-07-012
tags: mac os, Lion
title: How to show hidden files in Mac OS X Lion
-->


I’m continuing to get my new Macbook Air set up, and I’ve been getting
adjusted to the new Finder. This helps if you’re a power user:

1.  Open the terminal (found in /Applications/Utilities/)
2.  Type the following (without quotation marks) to show hidden files:
    “defaults write com.apple.finder AppleShowAllFiles -bool true”
3.  Hit enter
4.  Type the following (without quotation marks) to restart the Finder:
    “killall Finder”
5.  Hit enter

You can turn hidden files back off by doing the same thing, but
switching the “true” to “false” in step 2.

And a random tip navigating in the finder: press **⌘** + **↑** (command
+ up arrow) to navigate to the parent folder, all the way up to root.

