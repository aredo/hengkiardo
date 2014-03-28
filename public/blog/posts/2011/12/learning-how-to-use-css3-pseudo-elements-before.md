<!--
id: 14556224954
link: http://blog.hengkiardo.com/post/14556224954/learning-how-to-use-css3-pseudo-elements-before
slug: learning-how-to-use-css3-pseudo-elements-before
date: Wed Dec 21 2011 15:45:00 GMT+0700 (WIT)
publish: 2011-12-021
tags: css3, css
title: Learning how to use CSS3 pseudo-elements: :before & :after
-->


\<a id=”button” href=”\#”\>

Numbah one!

\</a\>

CSS Code:

\#button {

width:165px;

height:23px;

display:block;

font-family:Arial, “Helvetica”, sans-serif;

font-size:12px;

font-weight:bold;

color:\#fff;

text-decoration:none;

text-transform:uppercase;

text-align:center;

text-shadow:1px 1px 0px \#07526e;

padding-top:12px;

margin-left:auto;

margin-right:auto;

left:30px;

position:relative;

cursor:pointer;

border-left:solid 1px \#2ab7ec;

background-image: linear-gradient(bottom, rgb(14,137,182) 0%,
rgb(22,179,236) 100%);

background-image: -o-linear-gradient(bottom, rgb(14,137,182) 0%,
rgb(22,179,236) 100%);

background-image: -moz-linear-gradient(bottom, rgb(14,137,182) 0%,
rgb(22,179,236) 100%);

background-image: -webkit-linear-gradient(bottom, rgb(14,137,182) 0%,
rgb(22,179,236) 100%);

background-image: -ms-linear-gradient(bottom, rgb(14,137,182) 0%,
rgb(22,179,236) 100%);

-webkit-border-top-right-radius: 5px;

-webkit-border-bottom-right-radius: 5px;

-moz-border-radius-topright: 5px;

-moz-border-radius-bottomright: 5px;

border-top-right-radius: 5px;

border-bottom-right-radius: 5px;

-webkit-box-shadow: inset 0px 1px 0px \#2ab7ec, 0px 5px 0px 0px
\#07526e, 0px 10px 5px \#999;

-moz-box-shadow: inset 0px 1px 0px \#2ab7ec, 0px 5px 0px 0px \#07526e,
0px 10px 5px \#999;

-o-box-shadow: inset 0px 1px 0px \#2ab7ec, 0px 5px 0px 0px \#07526e, 0px
10px 5px \#999;

box-shadow: inset 0px 1px 0px \#2ab7ec, 0px 5px 0px 0px \#07526e, 0px
10px 5px \#999;

}

\#button:active {

top:3px;

-webkit-box-shadow: inset 0px 1px 0px \#2ab7ec, 0px 2px 0px 0px
\#07526e, 0px 5px 3px \#999;

-moz-box-shadow: inset 0px 1px 0px \#2ab7ec, 0px 2px 0px 0px \#07526e,
0px 5px 3px \#999;

-0-box-shadow: inset 0px 1px 0px \#2ab7ec, 0px 2px 0px 0px \#07526e, 0px
5px 3px \#999;

box-shadow: inset 0px 1px 0px \#2ab7ec, 0px 2px 0px 0px \#07526e, 0px
5px 3px \#999;

}

\#button:after {

content:”1”;

width:35px;

height:25px;

display:block;

position:absolute;

padding-top:10px;

top:0px;

margin-left:-37px;

font-size:16px;

font-weight:bold;

color:\#8fd1ea;

text-shadow:1px 1px 0px \#07526e;

border-right:solid 1px \#07526e;

background-image: linear-gradient(bottom, rgb(10,94,125) 0%,
rgb(14,139,184) 100%);

background-image: -o-linear-gradient(bottom, rgb(10,94,125) 0%,
rgb(14,139,184) 100%);

background-image: -moz-linear-gradient(bottom, rgb(10,94,125) 0%,
rgb(14,139,184) 100%);

background-image: -webkit-linear-gradient(bottom, rgb(10,94,125) 0%,
rgb(14,139,184) 100%);

background-image: -ms-linear-gradient(bottom, rgb(10,94,125) 0%,
rgb(14,139,184) 100%);

-webkit-border-top-left-radius: 5px;

-webkit-border-bottom-left-radius: 5px;

-moz-border-radius-topleft: 5px;

-moz-border-radius-bottomleft: 5px;

border-top-left-radius: 5px;

border-bottom-left-radius: 5px;

-webkit-box-shadow:inset 0px 1px 0px \#2ab7ec, 0px 5px 0px 0px \#032b3a,
0px 10px 5px \#999 ;

-moz-box-shadow:inset 0px 1px 0px \#2ab7ec, 0px 5px 0px 0px \#032b3a,
0px 10px 5px \#999 ;

-o-box-shadow:inset 0px 1px 0px \#2ab7ec, 0px 5px 0px 0px \#032b3a, 0px
10px 5px \#999 ;

box-shadow:inset 0px 1px 0px \#2ab7ec, 0px 5px 0px 0px \#032b3a, 0px
10px 5px \#999 ;

}

\#button:active:after {

top:-3px;

-webkit-box-shadow:inset 0px 1px 0px \#2ab7ec, 0px 5px 0px 0px \#032b3a,
1px 1px 0px 0px \#044a64, 2px 2px 0px 0px \#044a64, 2px 5px 0px 0px
\#044a64, 6px 4px 2px \#0b698b, 0px 10px 5px \#999 ;

-moz-box-shadow:inset 0px 1px 0px \#2ab7ec, 0px 5px 0px 0px \#032b3a,
1px 1px 0px 0px \#044a64, 2px 2px 0px 0px \#044a64, 2px 5px 0px 0px
\#044a64, 6px 4px 2px \#0b698b, 0px 10px 5px \#999 ;

-o-box-shadow:inset 0px 1px 0px \#2ab7ec, 0px 5px 0px 0px \#032b3a, 1px
1px 0px 0px \#044a64, 2px 2px 0px 0px \#044a64, 2px 5px 0px 0px
\#044a64, 6px 4px 2px \#0b698b, 0px 10px 5px \#999 ;

box-shadow:inset 0px 1px 0px \#2ab7ec, 0px 5px 0px 0px \#032b3a, 1px 1px
0px 0px \#044a64, 2px 2px 0px 0px \#044a64, 2px 5px 0px 0px \#044a64,
6px 4px 2px \#0b698b, 0px 10px 5px \#999 ;

}

