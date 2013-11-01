<!--
id: 48608457976
link: http://blog.hengkiardo.com/post/48608457976/jordan-hoff-dynamic-routing-requires-with-express-js
slug: jordan-hoff-dynamic-routing-requires-with-express-js
date: Mon Apr 22 2013 19:37:40 GMT+0700 (WIT)
publish: 2013-04-022
tags: nodejs, expressjs, routing
title: Jordan Hoff: Dynamic Routing requires with Express.js and Node.js
-->


[http://jordanhoff.com/post/22602013678/dynamic-express-routing](http://jordanhoff.com/post/22602013678/dynamic-express-routing)

[jhoff484](http://jordanhoff.com/post/22602013678/dynamic-express-routing):

> This weekend, I was working in express.js and found myself doing alot
> of this:
>
> ~~~~ {.prettyprint}
>  var routes = require('./routes'); app.get ('/api/init', routes.api.init); app.get ('/api/get', routes.api.get); app.get ('/api/mobile/init', routes.api.mobile.init); app.get ('/api/mobile/get',...
> ~~~~

