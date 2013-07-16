<?php require_once('include/config.php') ?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Wardah Travel In Style</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 8 ]>
  <link rel="stylesheet" href="css/ie7.css" media="screen">
  <![endif]-->
  <!-- end CSS-->
  <script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>
<body>
<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px; "></div></div>
<script src="http://connect.facebook.net/en_US/all.js"></script>
<script type="text/javascript">
FB.init({
    appId   :'312991652045191',
    status  : true, // check login status
    cookie  : true, // enable cookies to allow the server to access the session
    xfbml   : true, // parse XFBML
   // channelUrl : 'http://WWW.MYDOMAIN.COM/channel.html', // channel.html file
    oauth  : true // enable OAuth 2.0
});

// Do things that will sometimes call sizeChangeCallback()
function sizeChangeCallback() {
    FB.Canvas.setSize({ width: 520, height: 900 });
}
</script>
<script type="text/javascript">
    window.fbAsyncInit = function() {
        FB.Canvas.setAutoGrow();
	sizeChangeCallback() 
    }
</script>

