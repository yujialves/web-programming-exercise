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
   
   unset($_SESSION[setdata1]);
   unset($_SESSION[setdata2]);

   print $_SESSION[setdata1] ."<br>";
   print $_SESSION[setdata2] ."<br>";
   print $_SESSION[setdata3] ."<br>";
   print $_SESSION[setdata4] ."<br>";
   print $_SESSION[setdata5] ."<br>";
?>
</body>
</html>