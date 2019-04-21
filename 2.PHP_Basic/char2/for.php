<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/8 9:37**/
//正向
$start=1;
$end=100;
$step=1;
for ($i=$start;$i<=$end;$i=$i+$step){
    echo $i.' ';
}
echo '<br>';
//逆向
for ($i=$end;$i>=$start;$i=$i-$step){
    echo $i.' ';
}
echo '<br>';
for ($i=50;$i>=-50;$i--){
    echo $i.' ';
}