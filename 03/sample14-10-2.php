<?php
  session_start();

  if(empty($_SESSION[sescart])){
    //未定義時
    $html = "【現在、カートは空です】";
  }else{
    $cart = $_SESSION[sescart];//読み込み

    $product = array("冷蔵庫 AB-12345 (H)","エアコン AC-9999(W)","テレビ TV-A3456K-L23","パソコン PC-999999 Win100G","洗濯機 SK-TK2424 380L");

    $html = "【現在のカートの状況】<br><br>";
    $cartarray = explode(",",$cart);
    foreach($cartarray as $data){
      //名前を取得しHYMLに追加
      $html .= $product[$data-1]. "<br>";
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
<?=$html?>
<br>
<br>
<a href="sample14-10.php">戻る</a>
</body>
</html>