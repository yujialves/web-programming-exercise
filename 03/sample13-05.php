<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
  if(isset($_GET[id])){
    if($_GET[id] == 0){
      setcookie("mycart");//clear

    }else{
      if(strlen($_COOKIE[mycart])>0){//set
        $data = $_COOKIE[mycart];
        parse_str($data);
        $id = $ck_id;
      }

      $id .=(strlen($id) == 0 ? "" : ","). $_GET[id];//shaping
      setcookie("mycart", "ck_id=$id");//setcookie

    }

    print "現在のカートの状況】<br>";
    $idarray = explode(",", $id);
    foreach($idarray as $data){
      print $data . "<br>";
    }
    print "<br><br>";
    
  }
?>
<table border="1">
  <tr>
    <th>商品ID</th>
    <th>商品名</th>
    <th><br></th>
  </tr>
  <tr>
    <td>1</td>
    <td>冷蔵庫 AB-12345 (H)</td>
    <td>
      <a href="<?= $_SERVER[SCRIPT_NAME]."?id=1"?>">カートに入れる</a>
    </td>
  </tr>
  <tr>
    <td>２</td>
    <td>エアコン AC-9999(W)</td>
    <td>
      <a href="<?= $_SERVER[SCRIPT_NAME]."?id=2"?>">カートに入れる</a>
    </td>
  </tr>
  <tr>
    <td>３</td>
    <td>テレビ TV-A3456K-L23</td>
    <td>
      <a href="<?= $_SERVER[SCRIPT_NAME]."?id=3"?>">カートに入れる</a>
    </td>
  </tr>
  <tr>
    <td>4</td>
    <td>パソコン PC-999999 Win100G</td>
    <td>
      <a href="<?= $_SERVER[SCRIPT_NAME]."?id=4"?>">カートに入れる</a>
    </td>
  </tr>
  <tr>
    <td>5</td>
    <td>洗濯機 SK-TK2424 380L</td>
    <td>
      <a href="<?= $_SERVER[SCRIPT_NAME]."?id=5"?>">カートに入れる</a>
    </td>
  </tr>
  <tr>
    <td colspan="3" align="center">
      <a href="<?= $_SERVER[SCRIPT_NAME]."?id=0"?>">カートをクリア</a> 
    </td>
  </tr>
</table>
</body>
</html>