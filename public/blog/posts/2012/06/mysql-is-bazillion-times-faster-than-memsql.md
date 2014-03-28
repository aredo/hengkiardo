<!--
id: 25977473825
link: http://blog.hengkiardo.com/post/25977473825/mysql-is-bazillion-times-faster-than-memsql
slug: mysql-is-bazillion-times-faster-than-memsql
date: Wed Jun 27 2012 10:44:00 GMT+0700 (WIT)
publish: 2012-06-027
tags: 
title: MySQL Is Bazillion Times Faster Than MemSQL
-->


[http://dom.as/2012/06/26/memsql-rage/](http://dom.as/2012/06/26/memsql-rage/)

Domas Mituzas about the MemSQL vs MySQL benchmark:

Though I usually understand that those claims don’t make any sense, I
was wondering what did they do wrong. Apparently they got MySQL with
default settings running and MemSQL with default settings running, then
compared the two. They say it is a good benchmark, as it compares what
users get just by installing standard packages.

That is already cheating, because systems are forced to work in
completely different profiles.

The first paragraph of the post summarizes very well the general feeling
about benchmarks:

I don’t like stupid benchmarks, as they waste my time.

I think that most of the generic benchmarks are stupid, even if some
generic numbers are considered interesting by software engineers.
Benchmarks designed around specific scenarios of applications will most
of the time give more realistic results. But even those are difficult to
design and account for all the configuration options, scaling, or
changes of the use cases.

Original title and link: [MySQL Is Bazillion Times Faster Than
MemSQL](http://nosql.mypopescu.com/post/25952987065) ([NoSQL
database](http://nosql.mypopescu.com)©myNoSQL)

