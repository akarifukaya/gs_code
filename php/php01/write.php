<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
書き込みを行います。<br>
保存されました♪<br>

<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$cmt = $_POST["cmt"];
$n = ",";
$str = $name.":".$mail.$n.$cmt;



//文字作成
//$str = date("Y-m-d H:i:s");
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");//"\n"改行コード
fclose($file);
?>


<ul>
<li><a href="gurahu.php">一日の予定表示</a></li>
</ul>
</body>
</html>