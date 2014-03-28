<!--
id: 26481043174
link: http://blog.hengkiardo.com/post/26481043174/jquery-cookie-plugins
slug: jquery-cookie-plugins
date: Wed Jul 04 2012 14:52:00 GMT+0700 (WIT)
publish: 2012-07-04
tags: jquery, cookie, plugins
title: jQuery Cookie Plugins
-->


Simple extension to jQuery to handle setting and getting browser cookies

    (function ($, document, undefined) {
      var pluses = /\+/g;
      function raw(s) {
        return s;
      }

      function decoded(s) {
        return decodeURIComponent(s.replace(pluses, ' '));
      }
      $.cookie = function (key, value, options) {
        if (value !== undefined && !/Object/.test(Object.prototype.toString.call(value))) {
          options = $.extend({}, $.cookie.defaults, options);
          if (value === null) {
            options.expires = -1;
          }
          if (typeof options.expires === 'number') {
            var days = options.expires,
              t = options.expires = new Date();
            t.setDate(t.getDate() + days);
          }
          value = String(value);
          return (document.cookie = [encodeURIComponent(key), '=', options.raw ? value : encodeURIComponent(value), options.expires ? '; expires=' + options.expires.toUTCString() : '', options.path ? '; path=' + options.path : '', options.domain ? '; domain=' + options.domain : '', options.secure ? '; secure' : ''].join(''));
        }
        options = value || $.cookie.defaults || {};
        var decode = options.raw ? raw : decoded;
        var cookies = document.cookie.split('; ');
        for (var i = 0, parts;
        (parts = cookies[i] && cookies[i].split('=')); i++) {
          if (decode(parts.shift()) === key) {
            return decode(parts.join('='));
          }
        }
        return null;
      };
      $.cookie.defaults = {};
      $.removeCookie = function (key, options) {
        if ($.cookie(key, options) !== null) {
          $.cookie(key, null, options);
          return true;
        }
        return false;
      };
    })(jQuery, document);

