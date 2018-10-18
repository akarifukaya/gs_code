<?php
session_start();/*始まりは必ずこれ サーバー側に変数を保持 但し一度ファイルを落とすと無くなる*/

$_SESSION["name"]="fukaya";
$_SESSION["count"] += 1;
echo $_SESSION["count"];





?>