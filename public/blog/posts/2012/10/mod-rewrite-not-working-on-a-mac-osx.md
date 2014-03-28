<!--
id: 34292651344
link: http://blog.hengkiardo.com/post/34292651344/mod-rewrite-not-working-on-a-mac-osx
slug: mod-rewrite-not-working-on-a-mac-osx
date: Thu Oct 25 2012 19:11:46 GMT+0700 (WIT)
publish: 2012-10-025
tags: 
title: MOD_REWRITE NOT WORKING ON A MAC OSX
-->


![](http://www.leonardaustin.com/wp-content/uploads/2012/06/152px-Apple-logo.svg_.png)![](http://www.finalconcept.com.au/uploads//keyvisuals/apache_logo.jpg)

So I recently had an issue of mod\_rewrite not working on my mac osx
after setting up my vhost and going through my httpd.conf and replacing
all “override none” with “override all”. So a couple of things that I
learnt:

Firstly unless you going into System Prefernces -\> Sharing and turn on
Web Sharing OSX, apache will not read you httpd.conf or vhost file, it
will just redirect everything to the folder /usr/htdocs (which didn’t
even exist for me).

Secondly, you also need to change the file
etc/apache2/users/USERNAME.conf to following.

    <Directory "/Users/USERNAME/Sites/">
        Options Indexes MultiViews FollowSymlinks
        AllowOverride All
        Order allow,deny
        Allow from all
    </Directory>


