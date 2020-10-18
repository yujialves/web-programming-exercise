<?php
  //セッションS
  session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
   $_SESSION[setdata1] =10;
   $_SESSION[setdata2] ="PHP:HYpertext Preprocessor";

   print "セッションに「" .$_SESSION[setdata1] ."」を保存しました<br>";
   print "セッションに「" .$_SESSION[setdata2] ."」を保存しました<br>";

   $_SESSION[setdata3] = "技術評論社";
   $_SESSION[setdata4] = "東京新宿市市市谷左内左内町町21-13";
   $_SESSION[setdata5] = "http://www.gihyo.co.jp/";

   print "セッションに「" .$_SESSION[setdata3] ."」を保存しました<br>";
   print "セッションに「" .$_SESSION[setdata4] ."」を保存しました<br>";
   print "セッションに「" .$_SESSION[setdata5] ."」を保存しました<br>";
?>
</body>
</html>