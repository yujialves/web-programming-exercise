<?php
  session_start();

  $oldsesid = session_id();

  session_regenerate_id();

  $newsesid = session_id();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <?php

    print "【現在のセッションID】<br>";
    print $oldsesid . "<br><br>";
    print "【新しいセッションID】<br>";
    print $newsesid . "<br><br>";
  ?>
</body>
</html>