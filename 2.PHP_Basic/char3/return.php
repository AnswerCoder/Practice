<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/14 14:42**/
function sum($a,$b){
    $c=$a+$b;
    $d=$c+1;
    return $d;
}
$result=sum(2,3);
echo $result;
echo '<br>';
function sub($a,$b){
    $c=$a*$a-$b*$b;
    return $c;
}
echo sub(2,3);
