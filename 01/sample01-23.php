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
     if($cnt <=5){
        //変数値が5以下なら●
        print "●";
     }
     else{
        //変数値が5を超えたらループ終了
        break;
     }
     print "<br>";
 }
 print "ループ終了！";

 
 ?> 
 </body> 
 </html>