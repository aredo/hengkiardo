<!--
id: 25339994700
link: http://blog.hengkiardo.com/post/25339994700/completely-uninstall-postgresql-from-mac-osx-lion
slug: completely-uninstall-postgresql-from-mac-osx-lion
date: Mon Jun 18 2012 10:23:34 GMT+0700 (WIT)
publish: 2012-06-018
tags: 
title: Completely uninstall postgresql from Mac OSX Lion
-->


1.  Open a terminal window

    Utilities-\>Terminal

2.  Run the uninstaller

    sudo
    /Library/PostgreSQL/9.1/uninstall-postgresql.app/Contents/MacOS/installbuilder.sh

3.  Remove the PostgreSQL and data folders (Wizard will notify you that
    these were not removed)

    sudo rm -rf /Library/PostgreSQL

4.  Remove the ini file

    sudo rm /etc/postgres-reg.ini

5.  Remove the PostgreSQL user

    System Preferences -\> Users & Groups

    Unlock the settings panel by clicking on the padlock and enter your
    password

    Select the PostgreSQL user and click on the minus button.



