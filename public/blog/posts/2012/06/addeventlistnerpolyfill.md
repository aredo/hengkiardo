<!--
id: 25983569813
link: http://blog.hengkiardo.com/post/25983569813/addeventlistnerpolyfill
slug: addeventlistnerpolyfill
date: Wed Jun 27 2012 12:26:14 GMT+0700 (WIT)
publish: 2012-06-027
tags: javascript
title: addEventListner Polyfill
-->


    (function (win, doc) {
      if (win.addEventListener) return; //No need to polyfill

      function docHijack(p) {
        var old = doc[p];
        doc[p] = function (v) {
          return addListen(old(v))
        }
      }

      function addEvent(on, fn, self) {
        return (self = this).attachEvent('on' + on, function (e) {
          var e = e || win.event;
          e.preventDefault = e.preventDefault ||
          function () {
            e.returnValue = false
          }
          e.stopPropagation = e.stopPropagation ||
          function () {
            e.cancelBubble = true
          }
          fn.call(self, e);
        });
      }

      function addListen(obj, i) {
        if (i = obj.length) while (i--) obj[i].addEventListener = addEvent;
        else obj.addEventListener = addEvent;
        return obj;
      }
      addListen([doc, win]);
      if ('Element' in win) win.Element.prototype.addEventListener = addEvent; //IE8
      else { //IE < 8
        doc.attachEvent('onreadystatechange', function () {
          addListen(doc.all)
        }); //Make sure we also init at domReady
        docHijack('getElementsByTagName');
        docHijack('getElementById');
        docHijack('createElement');
        addListen(doc.all);
      }
    })(window, document);

