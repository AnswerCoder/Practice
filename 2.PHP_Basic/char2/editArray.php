<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/8 10:24**/
$number=[];
$n3=8;
//for循环创建数组
for ($i=0; $i<7;$i++){
    $number[]=rand(1,33);
}
$number[2]=$n3;
//foreach遍历数组
foreach ($number as $value){
    echo $value.' ';
}