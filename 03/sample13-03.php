<?php
  setcookie(mycookiedata);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
  if(strlen($_COOKIE[mycookiedata]) == 0){

    print "データはクッキーに保存されていません！";

  }
?>
</body>
</html>