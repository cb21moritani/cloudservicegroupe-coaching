<?php
########################################################
###
###	問診コーチング　リファレンスリダイレクト処理
###	reference.php
###	insert date	2014/02/04
###	modify date	2014/03/11
###	modify date	2014/04/01
###	version		0.03
###
########################################################

//基本設定
import_request_variables("g","var_");
ini_set("include_path","./lib" . PATH_SEPARATOR . ini_get("include_path"));
require_once 'reference.inc.php';

//初期値設定
$ser = $var_s;
$vol = $var_v;
$ctg = $var_c;
$url = 'index.html';
$title = '【該当なし】';

// 変数チェック
if (preg_match('/^[1-2]$/' , $ser) && preg_match('/^[0-1][0-9]$/' , $vol) && preg_match('/^[1-5]$/' , $ctg)) {
	if ($vol > 0 && $vol <= 12) {
		$url = $reference[$ser][$vol][$ctg]['url'];
		$title = $reference[$ser][$vol][$ctg]['title'];
	}
}

//リダイレクト処理
$print = 'リダイレクト先：<a href="' . $url . '" target="_blank">' . $title . "</a><br>\n";
echo '<html>';
echo '<head> <meta content="text/html; charset=utf-8" http-equiv="Content-Type"></head>';
echo '<body>';
echo $print;
echo '</body>';
echo '</html>';
header("Location: $url");
?>
