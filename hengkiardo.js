var connect = require('connect')
var gzippo = require('gzippo')


app = connect.createServer(
    // connect.static(__dirname + '/public', )
    gzippo.staticGzip(__dirname + '/public', { maxAge: 3600000 })
).listen(4041);

console.log("Connect server listening on 4041")