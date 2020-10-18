<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

    if(isset($_POST[btnExec])){
        print"送信ボタンがクリックされました!<br><br>";
    }
    elseif(isset($_POST[btnCanel])){
        header("location: index.htm");
        exit();
    }
?>
いずれかのボタンをクリックして下さい。
<form action = "<?=$_SERVER[SCRIPT_NAME]?>" method ="POST">
    <input type = "submit" name = "btnExec" value = "送信">
    <input type = "submit" name = "btnCanel" value = "キャンセル">
</form>
</body>
</html>