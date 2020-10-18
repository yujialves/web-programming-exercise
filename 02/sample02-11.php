<!DOCTYPE html> 
<html lang="ja">
<head> 
	<meta charset="UTF-8"> 
	<title></title> 
</head> 
<body> 
    <?php 
    
    //乱数ジェネレーターを初期化
     srand(microtime()*1000000);

    //5つの画像ファイルを表示するループ
    for ($cnt = 1; $cnt <= 5; $cnt++) { 
        $password=""; 
        //1から9までの乱数を生成
        $imagefile = rand(1,9);
        //生成された乱数から画像ファイル名を組み立て
        $imagefile = "image" .$imagefile .".gif";
        //
        print"<IMG src = 'images/$imagefile' hspace='2'>";    
    }
	?> 
</body> 
</html>
