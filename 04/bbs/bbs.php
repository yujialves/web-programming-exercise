<?php
error_reporting(E_ALL);
ini_set("display_errors", "Off");
$data_dir = "bbs_data";

if (isset($_POST["save"])) {
    $error_message = array();
    
    if (!strlen($_POST["body"])) {
        $error_message[] = "本文を入力してください";
    }
    if (!count($error_message)) {
        $title = str_replace("|", "|", $_POST["title"]);
        $name = str_replace("|", "|", $_POST["name"]);
        $body = str_replace("|", "|", $_POST["body"]);
        $date = date("Y-m-d H:i:s");

        $file_body = $date . "||" . $title . "||" . $name . "||" . $body;
        $file_name = sprintf("%s/%s.txt", $data_dir, date("Ymd-his"));
        if (!file_put_contents($file_name, $file_body)) {
            $error_message[] = "ファイルの書き込みに失敗しました";
        }
    }
}

$file_list = glob(sprintf("%s/*.txt", $data_dir));
rsort($file_list);

$bbs_list = array();
foreach ($file_list as $file) {
    $contents = file_get_contents($file);
    list($date, $title, $name, $body) = explode("||", $contents);
    $bbs = array();
    $bbs["date"] = $date;
    $bbs["name"] = $name;
    $bbs["title"] = $title;
    $bbs["body"] = $body;
    $bbs_list[] = $bbs;
}

require_once("smarty/Smarty.class.php");
$smarty = new Smarty();
$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";
$smarty->assign("error_message", $error_message);
$smarty->assign("bbs_list", $bbs_list);
$smarty->display("bbs.html");