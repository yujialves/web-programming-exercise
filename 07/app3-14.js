const http = require('http');
const fs = require('fs');
const ejs = require('ejs');
const url = require('url');
const qs = require('querystring'); //★追加

const index_page = fs.readFileSync('./app3-13.ejs', 'utf8');
const other_page = fs.readFileSync('./app3-12.ejs', 'utf8');
const style_css = fs.readFileSync('./app3-05.css', 'utf8');

var server = http.createServer(getFromClient);

server.listen(3000);
console.log('Server start!');

// ここまでメインプログラム========

// createServerの処理
function getFromClient(request, response) {
    var url_parts = url.parse(request.url, true);　//★trueに

    switch (url_parts.pathname) {

        case '/':
            response_index(request, response); //★修正
            break;
        
        case '/app3-12':
            response_other(request, response); //★修正
            break;
        
        case '/app3-05.css':
            response.writeHead(200, {'Content-Type': 'text/css'});
            response.write(style_css);
            response.end();
            break;
    
        default:
            response.writeHead(200, {'Content-Type': 'text/plain'});
            response.end('no page...');
            break;
    }
}

var data = {msg: 'no message...'};

function response_index(request, response) {
    if (request.method == 'POST') {
        var body = '';

        // データ受信のイベント処理
        request.on('data', (data) => {
            body += data;
        });

        // データ受信終了のイベント処理
        request.on('end', () => {
            data = qs.parse(body); // ★データのパース
            write_index(request, response);
        });

    } else {
        write_index(request, response);
    }
}

// indexの表示の作成
function write_index(request, response) {
    var msg = "※伝言を表示します。";
    var content = ejs.render(index_page, {
        title: "Index",
        content: msg,
        data: data,
    });
    response.writeHead(200, {'Content-Type': 'text/html'});
    response.write(content);
    response.end();
}
