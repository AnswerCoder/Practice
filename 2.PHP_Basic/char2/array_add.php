<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/8 9:50**/
$增加=true;
$number=[rand(1,33),rand(1,33),rand(1,33)];
if ($增加){
    $number[]=rand(1,33);   //添加一个数组元素(1.数组加[]直接赋值，为添加元素；2.数组加有数字的[]，如果该下标不存在也为添加元素，如果该下标存在，为覆盖元素)
}
array_push($number,66);//通过函数来添加元素
foreach ($number as $value){
    echo $value.' ';
}
