<?php
  session_start();

  if (!empty($_SESSION[sesuserid])) {
    print "<html lang=\"ja\">\n";
    print "<head>\n";
    print "<meta charset=\"UTF-8\">\n";
    print "<title></title>";
    print "</head>\n";
    print "<body><p>\n";
    print "あなたのユーザーIDは " . $_SESSION[sesuserid] . " です。<br>";
    print "<br>";
    print "*****************************************<br>";
    print "*****************************************<br>";
    print "** ここにユーザーのメインコンテンツ **<br>";
    print "*****************************************<br>";
    print "*****************************************<br>";
    print "</p></body></html>";
  }
  else{
    header("location: sample14-09.php");
    exit();
  }
?>