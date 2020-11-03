var express = require('express');
var ejs = require('ejs');

var app = express();

app.engine('ejs', ejs.renderFile);

app.use(express.static('public')); //★追記

app.get("/", (req, res) => {
    var msg = 'This is Express Page!<br>' + 'これは、スタイルシートを利用した例です。';
    res.render('app4-04.ejs',
        {title: 'Index', content: msg});
});

var server = app.listen(3000, () => {
    console.log('Server is running!');
});
