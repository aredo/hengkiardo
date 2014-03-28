var express = require('express')
var gzippo = require('gzippo')

var SET_PORT = 4041;

var app = express()

var isInArray = function(value, array) {
    return array.indexOf(value) > -1 ? true : false;
  }

app.use(express.compress())

app.configure(function(){
    app.use(gzippo.staticGzip(__dirname + '/public', { maxAge: 3600000 }));
    app.set("view options", {layout: false});

    // Add headers
    app.use(function (req, res, next) {

        // Website you wish to allow to connect
        res.setHeader('Access-Control-Allow-Origin', 'http://localhost:'+SET_PORT);

        // Request methods you wish to allow
        res.setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, PATCH, DELETE');

        // Request headers you wish to allow
        res.setHeader('Access-Control-Allow-Headers', 'X-Requested-With,content-type');

        // Set to true if you need the website to include cookies in the requests sent
        // to the API (e.g. in case you use sessions)
        res.setHeader('Access-Control-Allow-Credentials', true);

        // Pass to next layer of middleware
        next();
    });

});

app.get('/', function(req, res){
  res.render('index.html');
});
app.get('/:directory/', function(req, res){
  
  if( isInArray(req.params.directory, ['img', 'js', 'css', 'js/', 'css/', 'img', 'images', 'images/', 'fonts', 'fonts/'] )) {
    res.redirect('/');
  } else  {
    res.sendfile(__dirname + '/public/'+req.params.directory+'/index.html');
  }
});


app.get('/:directory', function(req, res){
  res.redirect('/'+req.params.directory+'/');
});

app.listen(process.env.PORT || SET_PORT)
console.log("Connect server listening on 9876")