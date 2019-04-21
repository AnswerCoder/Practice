<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/16 15:57**/
$height=152;
function countIdealWeight($h){
    if ($h<140){
        return 35;                                       //该函数效率更高
    }
    $result=$h-105;
    return $result;
}
function countIdealWeight2($h){

    $result=$h-105;
    if ($result<35){
        $result=35;
    }
    return $result;
}
echo '您的身高是'.$height.'cm,理想体重是'.countIdealWeight2($height).'kg<br>';
//================================================
$startTime=microtime(true);
for ($i=0;$i<2000000;$i++){
    countIdealWeight($height);
}
$runningTime1=microtime(true)-$startTime;
//================================================
$startTime=microtime(true);
for ($i=0;$i<2000000;$i++){
    countIdealWeight2($height);
}
$runningTime2=microtime(true)-$startTime;

echo '第一个函数运行时间：'.$runningTime1.'<br>第二个函数运行时间：'.$runningTime2;