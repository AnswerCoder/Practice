<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/14 21:24**/
//测量代码的执行效率
//开始时间，结束时间
$startTime1=microtime(true);
//评测的代码
for ($i=0;$i<100000;$i++){
    echo 2+3;
}
$endingTime1=microtime(true);
$totalTime1=$endingTime1-$startTime1;

echo '<br>';
$startTime2=microtime(true);
//评测的代码
for ($i=0;$i<100000;$i++){
    echo 2*3;
}

$endingTime2=microtime(true);
$totalTime2=$endingTime2-$startTime2;
echo '<br>';
var_dump($totalTime1);
var_dump($totalTime2);