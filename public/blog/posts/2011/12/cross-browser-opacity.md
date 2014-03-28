<!--
id: 13961553652
link: http://blog.hengkiardo.com/post/13961553652/cross-browser-opacity
slug: cross-browser-opacity
date: Fri Dec 09 2011 15:07:32 GMT+0700 (WIT)
publish: 2011-12-09
tags: css, crossbrowser
title: Cross Browser Opacity
-->


.transparent\_class {

  /\* IE 8 \*/

  -ms-filter: “progid:DXImageTransform.Microsoft.Alpha(Opacity=50)”;

  /\* IE 5-7 \*/

  filter: alpha(opacity=50);

  /\* Netscape \*/

  -moz-opacity: 0.5;

  /\* Safari 1.x \*/

  -khtml-opacity: 0.5;

  /\* Good browsers \*/

  opacity: 0.5;

}

