var express = require("express");
var router = express.Router();

var mysql = require("mysql"); //★追加

//MySQLの設定情報
var mysql_setting = {
    host     : "localhost",
    user     : "root",
    password : "root",
    database : "my-nodeapp-db"
};

// GETアクセスの処理
router.get("/", (req, res, next) => {

    //コネクションの用意
    var connection = mysql.createConnection(mysql_setting);

    //データベースに接続
    connection.connect();

    //データを取り出す
    connection.query("SELECT * from mydata", 
            function(error, results, fields) {
        //データベースアクセス完了時の処理
        if (error == null) {
            var data = {title: "mysql", content: results};
            res.render("hello", data);
        }
    });

    //接続を解除
    connection.end();
});

module.exports = router;
