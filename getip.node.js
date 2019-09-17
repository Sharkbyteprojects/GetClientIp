const http = require("http");
  http.createServer(function (req, res) {
    console.log(runnings(req, res));
  }).listen(8080, ()=>{console.log("Server Online on lhost 8080");});
function runnings(req, res){
  res.writeHead(200, {'Content-Type': 'text/plain'});
  res.end('IP: ' + ipders(req));
  return "ClientIP:\n"+ ipders(req)+"\n";
}
function ipders(req){
  return (req.headers['x-forwarded-for'] || '').split(',')[0] || req.connection.remoteAddress;
}