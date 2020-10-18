<?php
session_cache_limiter("public");
session_start();
require "config.php";

$prmarray = cnv_formstr($_POST);
if (!chk_auth($prmarray)) {
    $act = $prmarray["act"];
}else {
    $act = DEFSCR;
}

$dt = date("Y-m-d H:i:s");

?>

<?php $conn = db_conn(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title><?=ADMINAPPNAME?></title>
</head>
<body>
<div align="center">
<?php
call_user_func("screen_".$act, $prmarray);
?>
</div>
</body>
</html>

<?php db_close($conn); ?>

<?php
function screen_log($array){
?>
    <h3></h3>
    <form method="POST" action="<?=$_SERVER["SCRIPT_NAME"]?>"> 
    <table border="1">
        <tr> 
        <td>A51ID</td>
        <td>
            <input type="text" name="Z_id">
        </td>
    </tr>
    <tr>
        <td>
        </td>
        <td><input type="password" name="l_pass"></td> </tr> <tr> <td> </td> <td><input type="submit" value="831%" name="sub1"></td> </tr> </table> 
<input type="hidden" name="act" value="src"> 

<?php
}
?>