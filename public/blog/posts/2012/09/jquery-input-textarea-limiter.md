<!--
id: 32188283274
link: http://blog.hengkiardo.com/post/32188283274/jquery-input-textarea-limiter
slug: jquery-input-textarea-limiter
date: Mon Sep 24 2012 15:00:00 GMT+0700 (WIT)
publish: 2012-09-024
tags: javascript, jquery, snippet
title: Input & Textarea Character Limit Display with jQuery
-->


    (function($) {
        $.fn.extend( {
            limiter: function(limit, elem) {
                $(this).on("keyup focus", function() {
                    setCount(this, elem);
                });
                function setCount(src, elem) {
                    var chars = src.value.length;
                    if (chars > limit) {
                        src.value = src.value.substr(0, limit);
                        chars = limit;
                    }
                    elem.html( limit - chars );
                }
                setCount($(this)[0], elem);
            }
        });
    })(jQuery);

To setup the limiter, simply include a call similar to the one below

    var elem = $("#chars");
    $("#text").limiter(100, elem);

