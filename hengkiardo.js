var connect = require('connect');
connect.createServer(
    connect.static(__dirname + '/public')
).listen(4041);
console.log("Connect server listening on 4041");