<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/8 10:04**/
$number=[];
//for循环创建数组
for ($i=0; $i<7;$i++){
    $number[]=rand(1,33);
}
//foreach遍历数组
foreach ($number as $key=>$value){
    echo '第'.($key+1).'位:'.$value.' ||';    //$key为数组中各个元素的键，即下标
}
echo '<br>';
$number1=[];
for ($i=20;$i>=-20;$i--){
    $number1[]=$i;
}
foreach ($number1 as $value){
    echo $value.' ';
}