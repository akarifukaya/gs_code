<?php
//共通に使う関数を記述

function h($a)
{
    return htmlspecialchars($a, ENT_QUOTES);
}

function db_con(){
    //1.  DB接続します
    try {
      return new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');//←パスワード
    } catch (PDOException $e) {
      exit('DB_CONECTION_ERROR:'.$e->getMessage());
    }
    }
    function sqlError($stmt){
        //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
        $error = $stmt->errorInfo();
        exit("SQL_ERROR:".$error[2]);
        }
