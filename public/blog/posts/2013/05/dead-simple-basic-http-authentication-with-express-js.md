<!--
id: 50322788415
link: http://blog.hengkiardo.com/post/50322788415/dead-simple-basic-http-authentication-with-express-js
slug: dead-simple-basic-http-authentication-with-express-js
date: Mon May 13 2013 11:59:32 GMT+0700 (WIT)
publish: 2013-05-013
tags: 
title: Dead Simple Basic HTTP Authentication with Express.js
-->


[tbeseda](http://tbeseda.tumblr.com/post/14988151217/expressjs-basic-http-auth):

> Sometimes you just need to protect a specific route (from being
> crawled, for an admin resource, the perception of security, etc.).
> With [Express.js](http://expressjs.com/) it’s extremely easy to drop
> in [Connect’s basicAuth
> middleware](http://senchalabs.github.com/connect/middleware-basicAuth.html)
> (in CoffeeScript):
>
> This will protect the root route (and only the root route) with the
> username and password from line 4.
>
> “But what if I don’t have `super_secret_stuff`, and I just want to
> protect static content?” No big deal. Use `basicAuth` in conjunction
> with the static middleware:

