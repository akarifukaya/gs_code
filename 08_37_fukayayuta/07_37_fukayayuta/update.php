<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$id = $_POST["id"];
$name = $_POST["name"];
$jan = $_POST["jan"];
$actor = $_POST["actor"];
$views = $_POST["views"];
$eva = $_POST["eva"];
$story = $_POST["story"];

//2. DB接続します
include "funcs.php";
$pdo = db_con();

//３．データ登録SQL作成
$sql = "UPDATE gs_bm_table SET name=:name,jan=:jan,actor=:actor,views=:views,eva=:eva,story=:story WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_STR); 
$stmt->bindValue(':name', $name, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':jan', $jan, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':actor', $actor, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':views', $views, PDO::PARAM_INT); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':eva', $eva, PDO::PARAM_INT); 
$stmt->bindValue(':story', $story, PDO::PARAM_INT); 

$status = $stmt->execute();



//４．データ登録処理後
if ($status == false) {
    sqlError($stmt);
} else {
    //５．index.phpへリダイレクト
    header("Location: select.php");
    exit;
}