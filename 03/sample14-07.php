<?php
  $oldsession = session_name("ORIGINALSESSION");
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
  
    print "【前のセッション名】<br>";
    print $oldsession . "<br><br>";

    print "【現在のセッション名】<br>";
    print session_name() . "<br><br>";
  ?>
</body>
</html>