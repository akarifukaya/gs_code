<?php
session_start();/*始まりは必ずこれ サーバー側に変数を保持 但し一度ファイルを落とすと無くなる*/
echo $_SESSION["name"]."<br>";
echo $_SESSION["count"];

?>