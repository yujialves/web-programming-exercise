<?php
    $useragent = $_SERVER[HTTP_USER_AGENT];

    if(strlen(strpos($useragent, "MSIE"))>0){
        header("location: sample12-34_IE.htm");
    }
    elseif(strlen(strpos($useragent,"Chrome"))>0){
        header("location: sample12-34_Cr.htm");
    }
    elseif(strlen(strpos($useragent,"Safari"))>0){
        header("location: sample12-34_Sf.htm");
    }
    elseif(strlen(strpos($useragent,"Mozilla"))>0){
        header("location: sample12-34_NN.htm");
    }
    else{
        header("location: index.htm");
    }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
</body>
</html>