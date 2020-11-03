var express = require('express');
var ejs = require('ejs'); //★追加

var app = express();

app.engine('ejs', ejs.renderFile); //★追加

app.get("/", (req, res) => {
    // index.ejsをレンダリングする
    res.render('app4-04.ejs',
        {title: 'Index',
            content: 'This is Express-app Top Page!'});
});

var server = app.listen(3000, () => {
    console.log('Server is running!');
});
