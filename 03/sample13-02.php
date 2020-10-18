
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
  if(strlen($_COOKIE[mycookiedata])>0){
    $data = $_COOKIE[mycookiedata];//set

    print $data ."<BR><BR>";

    parse_str($data);

    print "クッキーに保存されたデータは、<BR>";
    print $ck_data1 ."<BR>";
    print $ck_data2 ."<BR>";
  }else{

    print "データはクッキーに保存されていません！";
  }
?>
</body>
</html>