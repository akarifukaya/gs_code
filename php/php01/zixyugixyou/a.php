
<?php
$y = 2018;
$m = 9;
 
$d = 1;
while (checkdate($m, $d, $y)) {
    echo $d;
    $d++;

}
?>


