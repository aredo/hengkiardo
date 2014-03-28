<!--
id: 67649174816
link: http://blog.hengkiardo.com/post/67649174816/tip-build-grunt-projects
slug: tip-build-grunt-projects
date: Thu Nov 21 2013 17:37:07 GMT+0700 (WIT)
publish: 2013-11-021
tags: 
title: Tip: Build Grunt Projects with a Link or Bookmark
-->


I use grunt in all of my projects, and grunt-watch never quite works. So
I’m always running grunt on the command line, and then switching to the
browser. To fix that, I decided to abuse HTTP Status Codes and NodeJS.

I made a little node script in the root of my project, which contains
this.

    var http = require("http");
    var exec = require('child_process').exec
    var server = http.createServer(function(request, response) {
        response.writeHead(204);
        exec("grunt");
        response.end();
    });

    server.listen(5173);
    console.log("Server is listening");

Then I created a bookmark, but you could also have a link on the website
itself or do something silly like curl on the command line anyway. Point
the link to http://localhost:5173

Now run the server

    node gruntlet.js

And any time a http request is made to port 5173 on localhost, it’ll
invoke grunt.

If you haven’t tried it yet, you’re probably thinking “Well, that’ll try
to navigate to localhost:5173 in the browser!”. That’s where the trick
is. We’re using the little-known status code 204 which means “No
content”; and browsers won’t navigate to the URL, meaning you can hit F5
and you’ll get the new build.

