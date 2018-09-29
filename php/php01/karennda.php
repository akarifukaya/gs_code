<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="post.css">

<body>
１月

<?php

// 年月を取得する
$ym_now = date("Ym");
$y = 2018;
$m = 1;
?>


<table border="2">
<tr>
<th class="d823">日</th>
<th>月</th>
<th>火</th>
<th>水</th>
<th>木</th>
<th>金</th>
<th class="e823">土</th>
</tr>


<?php
 
// 1日の曜日を取得
$wd1 = date("w", mktime(0, 0, 0, $m, 1, $y));
 
// その数だけ空白を表示
for ($i = 1; $i <= $wd1; $i++) {
    echo "<td>　</td>";
}

// 1日から月末日までの表示
$d = 1;
while (checkdate($m, $d, $y)) {
    echo "<td><a href='post.php'>$d</a></td>";

    
    // 今日が土曜日の場合は…
if (date("w", mktime(0, 0, 0, $m, $d, $y)) == 6) {
    // 週を終了
    echo "</tr>";
 
    // 次の週がある場合は新たな行を準備
    if (checkdate($m, $d + 1, $y)) {
        echo "<tr>";
        
    }  
}
    $d++;  
}
// 最後の週の土曜日まで移動
$wdx = date("w", mktime(0, 0, 0, $m + 1, 0, $y));
for ($i = 1; $i < 7 - $wdx; $i++) {
    echo "<td>　</td>";
}

?>

</table>

<body class="f823">
２月
<?php

// 年月を取得する
$ym_now = date("Ym");
$y = 2018;
$m = 2;
?>
<table border="2">
<tr>
<th class="d823">日</th>
<th>月</th>
<th>火</th>
<th>水</th>
<th>木</th>
<th>金</th>
<th class="e823">土</th>
</tr>


<?php
 
// 1日の曜日を取得
$wd1 = date("w", mktime(0, 0, 0, $m, 1, $y));
 
// その数だけ空白を表示
for ($i = 1; $i <= $wd1; $i++) {
    echo "<td>　</td>";
}

// 1日から月末日までの表示
$d = 1;
while (checkdate($m, $d, $y)) {
    echo "<td><a href='post.php'>$d</a></td>";

    
    // 今日が土曜日の場合は…
if (date("w", mktime(0, 0, 0, $m, $d, $y)) == 6) {
    // 週を終了
    echo "</tr>";
 
    // 次の週がある場合は新たな行を準備
    if (checkdate($m, $d + 1, $y)) {
        echo "<tr>";
        
    }  
}
    $d++;  
}
// 最後の週の土曜日まで移動
$wdx = date("w", mktime(0, 0, 0, $m + 1, 0, $y));
for ($i = 1; $i < 7 - $wdx; $i++) {
    echo "<td>　</td>";
}

?>

</table>

<body class="f823">
３月
<?php

// 年月を取得する
$ym_now = date("Ym");
$y = 2018;
$m = 3;
?>
<table border="2">
<tr>
<th class="d823">日</th>
<th>月</th>
<th>火</th>
<th>水</th>
<th>木</th>
<th>金</th>
<th class="e823">土</th>
</tr>


<?php
 
// 1日の曜日を取得
$wd1 = date("w", mktime(0, 0, 0, $m, 1, $y));
 
// その数だけ空白を表示
for ($i = 1; $i <= $wd1; $i++) {
    echo "<td>　</td>";
}

// 1日から月末日までの表示
$d = 1;
while (checkdate($m, $d, $y)) {
    echo "<td><a href='post.php'>$d</a></td>";

    
    // 今日が土曜日の場合は…
if (date("w", mktime(0, 0, 0, $m, $d, $y)) == 6) {
    // 週を終了
    echo "</tr>";
 
    // 次の週がある場合は新たな行を準備
    if (checkdate($m, $d + 1, $y)) {
        echo "<tr>";
        
    }  
}
    $d++;  
}
// 最後の週の土曜日まで移動
$wdx = date("w", mktime(0, 0, 0, $m + 1, 0, $y));
for ($i = 1; $i < 7 - $wdx; $i++) {
    echo "<td>　</td>";
}

?>

</table>

<body class="f823">
    
４月
<?php

// 年月を取得する
$ym_now = date("Ym");
$y = 2018;
$m = 4;
?>
<table border="2">
<tr>
<th class="d823">日</th>
<th>月</th>
<th>火</th>
<th>水</th>
<th>木</th>
<th>金</th>
<th class="e823">土</th>
</tr>


<?php
 
// 1日の曜日を取得
$wd1 = date("w", mktime(0, 0, 0, $m, 1, $y));
 
// その数だけ空白を表示
for ($i = 1; $i <= $wd1; $i++) {
    echo "<td>　</td>";
}

// 1日から月末日までの表示
$d = 1;
while (checkdate($m, $d, $y)) {
    echo "<td><a href='post.php'>$d</a></td>";

    
    // 今日が土曜日の場合は…
if (date("w", mktime(0, 0, 0, $m, $d, $y)) == 6) {
    // 週を終了
    echo "</tr>";
 
    // 次の週がある場合は新たな行を準備
    if (checkdate($m, $d + 1, $y)) {
        echo "<tr>";
        
    }  
}
    $d++;  
}
// 最後の週の土曜日まで移動
$wdx = date("w", mktime(0, 0, 0, $m + 1, 0, $y));
for ($i = 1; $i < 7 - $wdx; $i++) {
    echo "<td>　</td>";
}

?>

</table>


<body>
５月
<?php

// 年月を取得する
$ym_now = date("Ym");
$y = 2018;
$m = 5;
?>
<table border="2">
<tr>
<th class="d823">日</th>
<th>月</th>
<th>火</th>
<th>水</th>
<th>木</th>
<th>金</th>
<th class="e823">土</th>
</tr>


<?php
 
// 1日の曜日を取得
$wd1 = date("w", mktime(0, 0, 0, $m, 1, $y));
 
// その数だけ空白を表示
for ($i = 1; $i <= $wd1; $i++) {
    echo "<td>　</td>";
}

// 1日から月末日までの表示
$d = 1;
while (checkdate($m, $d, $y)) {
    echo "<td><a href='post.php'>$d</a></td>";

    
    // 今日が土曜日の場合は…
if (date("w", mktime(0, 0, 0, $m, $d, $y)) == 6) {
    // 週を終了
    echo "</tr>";
 
    // 次の週がある場合は新たな行を準備
    if (checkdate($m, $d + 1, $y)) {
        echo "<tr>";
        
    }  
}
    $d++;  
}
// 最後の週の土曜日まで移動
$wdx = date("w", mktime(0, 0, 0, $m + 1, 0, $y));
for ($i = 1; $i < 7 - $wdx; $i++) {
    echo "<td>　</td>";
}

?>

</table>

<body>
６月
<?php

// 年月を取得する
$ym_now = date("Ym");
$y = 2018;
$m = 6;
?>
<table border="2">
<tr>
<th class="d823">日</th>
<th>月</th>
<th>火</th>
<th>水</th>
<th>木</th>
<th>金</th>
<th class="e823">土</th>
</tr>


<?php
 
// 1日の曜日を取得
$wd1 = date("w", mktime(0, 0, 0, $m, 1, $y));
 
// その数だけ空白を表示
for ($i = 1; $i <= $wd1; $i++) {
    echo "<td>　</td>";
}

// 1日から月末日までの表示
$d = 1;
while (checkdate($m, $d, $y)) {
    echo "<td><a href='post.php'>$d</a></td>";

    
    // 今日が土曜日の場合は…
if (date("w", mktime(0, 0, 0, $m, $d, $y)) == 6) {
    // 週を終了
    echo "</tr>";
 
    // 次の週がある場合は新たな行を準備
    if (checkdate($m, $d + 1, $y)) {
        echo "<tr>";
        
    }  
}
    $d++;  
}
// 最後の週の土曜日まで移動
$wdx = date("w", mktime(0, 0, 0, $m + 1, 0, $y));
for ($i = 1; $i < 7 - $wdx; $i++) {
    echo "<td>　</td>";
}

?>

</table>



</body>