<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/7 17:02**/
//逻辑(logic)运算  :就是对布尔值(条件)的运算

//$考90分=true;
//$按时睡觉=false;
//
////逻辑或：      ||
//$result1=$考90分||$按时睡觉;
////var_dump($result1);
////逻辑与：      &&
//$result2=$考90分&&$按时睡觉;
////var_dump($result2);
//if ($result1){
//    echo '妈妈奖励10元钱';
//}
$a1=true&&false;//假
echo 'a1: ';
var_dump($a1);
echo'<br>';

$a2=false||false;//假
echo 'a2: ';
var_dump($a2);
echo'<br>';

$a3=true||false;//真
echo 'a3: ';
var_dump($a3);
echo'<br>';

$a4=true&&true;//真
echo 'a4: ';
var_dump($a4);
echo'<br>';

$b1=(1==1);//真
echo 'b1: ';
var_dump($b1);
echo'<br>';

$b2=10>20;//假
echo 'b2: ';
var_dump($b2);
echo'<br>';

$b3=5*2<1;//假
echo 'b3: ';
var_dump($b3);
echo'<br>';

$b4=3==1.5*2;//真
echo 'b4: ';
var_dump($b4);
echo'<br>';

$c1=6<7&&false;//假
echo 'c1: ';
var_dump($c1);
echo'<br>';

$c2=true||7==8;//真
echo 'c2: ';
var_dump($c2);
echo'<br>';

$c3=true||false&&true;//真
echo 'c3: ';
var_dump($c3);
echo'<br>';

$c4=true&&true||false&&true||true;//真
echo 'c4: ';
var_dump($c4);
echo'<br>';