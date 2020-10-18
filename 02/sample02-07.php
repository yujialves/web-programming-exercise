<!DOCTYPE html> 
<html lang="ja">
<head> 
	<meta charset="UTF-8"> 
	<title></title> 
</head> 
<body> 
    <?php 
    
    $data = 1254.56789; 

    //小数点以下切り捨て
    print floor($data); 
    print "<br>"; 

    //小数点第二位で切り捨て
    print floor($data * 100) / 100; 
    print "<br>";

    //百の位で切り捨て
    print floor($data / 100) * 100; 
    print "<br>"; 

	?> 
</body> 
</html>