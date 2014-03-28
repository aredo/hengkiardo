<!--
id: 58402212460
link: http://blog.hengkiardo.com/post/58402212460/start-mongodb-as-a-service-os-x
slug: start-mongodb-as-a-service-os-x
date: Fri Aug 16 2013 13:35:13 GMT+0700 (WIT)
publish: 2013-08-016
tags: mongdb, service
title: Start mongodb as a service OS X
-->


Stick this file in \~/Library/LaunchAgents/org.mongodb.mongod.plist

    <?xml version="1.0" encoding="UTF-8"?>
    <!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
    <plist version="1.0">
    <dict>
      <key>Label</key>
      <string>org.mongodb.mongod</string>
      <key>ProgramArguments</key>
      <array>
        <string>/usr/local/Cellar/mongodb/2.4.3-x86_64/bin/mongod</string>
        <string>run</string>
        <string>--config</string>
        <string>/usr/local/Cellar/mongodb/2.4.3-x86_64/mongod.conf</string>
      </array>
      <key>RunAtLoad</key>
      <true/>
      <key>KeepAlive</key>
      <false/>
      <key>UserName</key>
      <string>{your_username}</string>
      <key>WorkingDirectory</key>
      <string>/usr/local</string>
      <key>StandardErrorPath</key>
      <string>/usr/local/var/log/mongodb/output.log</string>
      <key>StandardOutPath</key>
      <string>/usr/local/var/log/mongodb/output.log</string>
    </dict>
    </plist>

Make sure to change instances of ‘{your\_username}’ to your username and
any paths to be appropriate. After that

    launchctl load ~/Library/LaunchAgents/org.mongodb.mongod.plist 
    To add the file to the launchd service, and then you can run

launchctl start org.mongodb.mongod This plist is taken from Homebrew,
which is a fairly useful Mac tool for getting and managing packages like
MongoDB. Also, if you aren’t using a mongodb config file, remove these
lines:

    --config
    /usr/local/Cellar/mongodb/2.4.3-x86_64/mongod.conf

As MongoDB will require that config file to start up. Also you can add
alias to your \~/.bash\_profile to start/stop mongod service

    alias mongostart="launchctl start org.mongodb.mongod"
    alias mongostop="launchctl stop org.mongodb.mongod"

