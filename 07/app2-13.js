const http = require('http');
const fs = require('fs');
const ejs = require('ejs');

const index_page = fs.readFileSync('./app2-12.ejs', 'utf8');

var server = http.createServer(getFromClient);

server.listen(3000);
console.log('Server start!');

// ここまでメインプログラム========

// createServerの処理
function getFromClient(request, response) {
    var content = ejs.render(index_page, {
        title: "Index",
        content: "これはテンプレートを使ったサンプルページです。",
    });
    response.writeHead(200, {'Content-type': 'text/html'});
    response.write(content);
    response.end();
}
