<?php

echo date("Y年m月d日H時i分s秒")."<dr>";//年や時間を大文字しにしないと年にならない

$n = rand(1,2);
if($n==1){
    echo"あたり";
}else{
    echo"はずれ";

}