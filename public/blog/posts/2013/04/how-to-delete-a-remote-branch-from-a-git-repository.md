<!--
id: 47773047195
link: http://blog.hengkiardo.com/post/47773047195/how-to-delete-a-remote-branch-from-a-git-repository
slug: how-to-delete-a-remote-branch-from-a-git-repository
date: Fri Apr 12 2013 17:46:00 GMT+0700 (WIT)
publish: 2013-04-012
tags: git, tips trik
title: How to delete a remote branch from a git repository
-->


This isn’t obvious, so I thought I’d post an example for deleting a
remote branch.

Let’s say you want to delete origin/some\_branch from origin

    $ git branch -a
    * maorigin/master
    origin/some_branch

To remove the branch, just do this:

    $ git push origin :some_branch

Now, it’s gone!

    $ git branch -a
    * maorigin/master

