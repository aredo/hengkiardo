<!--
id: 26328250028
link: http://blog.hengkiardo.com/post/26328250028/read-url-get-variables-with-javascript
slug: read-url-get-variables-with-javascript
date: Mon Jul 02 2012 12:06:00 GMT+0700 (WIT)
publish: 2012-07-02
tags: javascript
title: Read URL GET variables with Javascript
-->


**The Code**

    function getUrlVars() {
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
            vars[key] = value;
        });
        return vars;
    }

**So as an example**

    http://hengkiardo.com/index.php?id=123&page=home

    var first = getUrlVars()["id"];
    var second = getUrlVars()["page"];
    console.log(first);
    console.log(second);

