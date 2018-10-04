<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$name = $_POST["name"];
$jan = $_POST["jan"];
$actor = $_POST["actor"];
$views = $_POST["views"];
$eva = $_POST["eva"];
$story = $_POST["story"];

//2. DB接続します
include "funcs.php";
$pdo =db_con();


//３．データ登録SQL作成
$sql="INSERT INTO gs_bm_table(name,jan,actor,views,eva,story,indate)VALUES(:name,:jan,:actor,:views,:eva,:story,sysdate())";
// 上記の内容を下記にまとめ$sql
$stmt = $pdo->prepare($sql);
//bindValueはクリーンにして渡すこと
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)文字の場合はPDO::PARAM_STR
$stmt->bindValue(':jan', $jan, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':actor', $actor, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':views', $views, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':eva', $eva, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':story', $story, PDO::PARAM_STR); 
$status = $stmt->execute();//実行 statusで判断する

//４．データ登録処理後
if($status==false){
  sqlError($stmt);
}else{
  //５．index.phpへリダイレクト

header("Location: kadai.php");
exit;

}
?>
