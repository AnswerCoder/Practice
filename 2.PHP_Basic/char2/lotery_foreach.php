<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/8 9:11**/
$number=[rand(1,33),rand(1,33),rand(1,33),rand(1,33),rand(1,33),rand(1,33),rand(1,16)];
//foreach 遍历
foreach ($number as $value){
    echo $value.' ';
}
echo '<br>';
$letter=['a','b','c','d','e'];
foreach ($letter as $value){
    echo $value;
}