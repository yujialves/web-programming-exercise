<!DOCTYPE html>
 <html lang="ja"> 
 <head> 
  <meta charset="UTF-8'"> 
  <title></title> 
 </head> 
 <body> 
 <?php
 
 //1~10までのループ
 for($cnt = 1;$cnt <= 10;$cnt++){
     print $cnt;
     if($cnt<=5){
         //変数値が5以下なら●マークを追加
         print "●";
     }
     elseif($cnt<=8){
        //変数値が5以下でなく8以下なら■マークを追加
        print "■";
    }
    else{
        //いずれでもない場合
        print "▼";
    }
     print "<br>";
 }
 
 ?> 
 </body> 
 </html>