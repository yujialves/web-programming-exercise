<?php
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

    print $_SESSION[sesdata1] . "<br>";
    print $_SESSION[sesdata2] . "<br>";
    print $_SESSION[sesdata3] . "<br>";
    print $_SESSION[sesdata4] . "<br>";
    print $_SESSION[sesdata5] . "<br>";


    $_SESSION = array();
    session_destroy();

    print $_SESSION[sesdata1] . "<br>";
    print $_SESSION[sesdata2] . "<br>";
    print $_SESSION[sesdata3] . "<br>";
    print $_SESSION[sesdata4] . "<br>";
    print $_SESSION[sesdata5] . "<br>";

    if (! isset($_SESSION[sesdata3])) {
      print "セッション変数は使われていません！<br>";
    }
    
  ?>
</body>
</html>