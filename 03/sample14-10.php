<?php
  if(isset($_GET[id])){
    //id渡された時
    //セッション開始
    session_start();
  
    if($_GET[id] == 0){
      unset($_SESSION[sescart]);//clesr
    }else{
      if(!empty($_SESSION[sescart])){
        $cart = $_SESSION[sescart];//定義済み
      }

      $cart .= (strlen($cart)== 0 ? "" : ",").$_GET[id];//カンマ区切りで定義
      $_SESSION[sescart] = $cart;

      print"今回カートに入れた商品IDは ".$_GET[id]."<br><br>";
    }
  }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<table border="1">
  <tr>
    <th>商品ID</th>
    <th>商品名</th>
    <th><BR></th>
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
  <tr>
    <td colspan="3" align="center">
      <a href="sample14-10-2.php">カートの中身を見る</a>
    </td>
  </tr>
</table>
</body>
</html>