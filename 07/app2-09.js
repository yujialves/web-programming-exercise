const http = require('http');
const fs = require('fs');

var server = http.createServer(getFromClient);

server.listen(3000);
console.log('Server start!');

// ここまでメインプログラム========

// createServerの処理
function getFromClient(request, response) {
    fs.readFile('./app2-08.html', 'UTF-8',
        (error, data) => {
            var content = data.
                replace(/dummy_title/g, 'タイトルです').
                replace(/dummy_content/g, 'これがコンテンツです。');

            response.writeHead(200, {'Content-type': 'text/html'});
            response.write(content);
            response.end();
        }
    );
}
