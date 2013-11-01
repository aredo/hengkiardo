<!--
id: 17655981880
link: http://blog.hengkiardo.com/post/17655981880/awesome-rainbow-effect-with-css3
slug: awesome-rainbow-effect-with-css3
date: Wed Feb 15 2012 20:41:06 GMT+0700 (WIT)
publish: 2012-02-015
tags: 
title: Awesome Rainbow Effect With CSS3
-->


``

\<h1 class="rainbow"\>

  This is the Rainbow Effect using CSS3. Is that COOL?

\</h1\>

\<style\>

.rainbow{ 

  font-size:36px;

  cursor:pointer;

}

.rainbow:hover{

-webkit-background-clip: text;

color: white;

-webkit-text-fill-color: transparent;

background-color:\#FFF;

background-image: 

-webkit-gradient(linear,left top,right top,from(\#ea8711),
to(\#d96363));

background-image:
-webkit-linear-gradient(left,\#ea8711,\#d96363,\#73a6df,\#9085fb,\#52ca79); 

background-image:
-moz-linear-gradient(left,\#ea8711,\#d96363,\#73a6df,\#9085fb,\#52ca79);

background-image:
-ms-linear-gradient(left,\#ea8711,\#d96363,\#73a6df,\#9085fb,\#52ca79); 

background-image:
-o-linear-gradient(left,\#ea8711,\#d96363,\#73a6df,\#9085fb,\#52ca79);

}

\</style\>

