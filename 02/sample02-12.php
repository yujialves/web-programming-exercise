<!DOCTYPE html> 
<html lang="ja">
<head> 
	<meta charset="UTF-8"> 
	<title></title> 
</head> 
<body> 
    <?php 

    //
    $banner[1][0] = "http://www.gihyo.co.jp/indexJ.html";
    $banner[1][1] = "gihyo.gif";
    $banner[2][0] = "http://www.apache.org/";
    $banner[2][1] = "asf_logo_wlde.gif";
    $banner[3][0] = "http://www.php.net/";
    $banner[3][1] = "php.gif"; 
    $banner[4][0] = "http://www.mysql.com/";
    $banner[4][1] = "mysql_100x52-64.gif"; 
      
    //乱数ジェネレーターを初期化
    srand(microtime()*1000000);

    // 1-4 
    $data = rand(1, 4); 
    //
    $html = "<A href='" . $banner[$data] [0] . "'>" . 
            "<IMG src='images/" . $banner[$data] [1] . "'></A>"; 
    //HTML 
    print $html; 

	?> 
</body> 
</html>
