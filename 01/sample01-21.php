<!DOCTYPE html>
 <html lang="ja"> 
 <head> 
  <meta charset="UTF-8'"> 
  <title></title> 
 </head> 
 <body> 
 <?php

 $data = 3;
 
 //1~10までのループ
 for($cnt = 1;$cnt <= 10;$cnt++){
     print $cnt;
     if($cnt <=5 and $cnt<= $data){
        //変数値が5なら●
        print "●";
     }
     if($cnt >=8 or $cnt<= $data){
        //変数値が5以上なら▼
        print "○";
     }if($cnt >=8 and $cnt<= 10){
        //変数値が5より大きければ▽
        print "▼";
     }
     if(! ($cnt >=8 and $cnt<= 10)){
        //変数値が３より小さければ■
        print "▽";
     }
     print "<br>";
 }
 

 
 ?> 
 </body> 
 </html>