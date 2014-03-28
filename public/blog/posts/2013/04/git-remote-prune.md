<!--
id: 48342156272
link: http://blog.hengkiardo.com/post/48342156272/git-remote-prune
slug: git-remote-prune
date: Fri Apr 19 2013 13:33:00 GMT+0700 (WIT)
publish: 2013-04-019
tags: git, github, tips trik, tips
title: what "git remote prune" ?
-->


When you use 

    git push origin :staleStuff

, it automatically removes 

    origin/staleStuff

so when you ran 

    git remote prune origin

, you have pruned some branch that was removed by someone else.

It’s more likely that your co-workers now need to run 

    git prune

 to get rid of branches you have removed.

