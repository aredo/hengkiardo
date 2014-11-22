var axm = require('axm');

axm.catchAll();

var static = require('node-static');
//
// Create a node-static server to serve the current directory
//
var file = new static.Server('./public', { cache: 86400, serverInfo:'www.digitalocean.com/?refcode=731164068215', headers: {'X-Creator':'Follow @hengkiardo'} });
var port = 4041;

require('http').createServer(function (request, response) {
    file.serve(request, response, function (err, res) {
        if (err) { // An error as occured

            axm.notify(new Error('> Error serving " + request.url + " - " + err.message'));

            file.serveFile('/index.html', 301, {}, request, response);

        } else { // The file was served successfully
            app.use(axm.expressErrorHandler());
        }
    });
}).listen(port);
// console.log("> node-static is listening on http://127.0.0.1:"+ port);
