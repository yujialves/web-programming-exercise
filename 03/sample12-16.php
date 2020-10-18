<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

    if (isset($_POST[btnExec])){

        print $_POST[inputdata]."<br><br>\n\n";

        print htmlspecialchars($_POST[inputdata])."<br><br>\n\n";
    }
?>
テキストボックスに値を入力して[送信]ボタンをクリックして下さい。
<form action = "<?=$_SERVER[SCRIPT_NAME]?>" method = "POST">
    <input size = "90" type = "text" name = "inputdata">
    <input type ="submit" name = "btnExec" value = "送信">
    
</body>
</html>