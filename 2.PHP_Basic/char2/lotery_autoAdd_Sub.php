<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/8 9:21**/
$number=[rand(1,33),rand(1,33),rand(1,33),rand(1,33),rand(1,33),rand(1,33),rand(1,16)];
$i=1;
//foreach 遍历
foreach ($number as $value){
    echo '第'.$i.'位:'.$value.' ||';
    $i++;
}

$i=1;
echo $i++;//先打印出$i,再加一  1
echo $i;                            //2     //自减同理
echo ++$i;//先加一，再打印出加一后的$i  3