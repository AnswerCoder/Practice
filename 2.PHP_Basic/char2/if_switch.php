<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/8 8:08**/
//当需要判断范围时，if更方便
$age=17;
if ($age<18){
    echo'小朋友你好！';
}elseif ($age<=40){
    echo'先生你好！';
}else{
    echo'大叔你好！';
}
if ($age<18){
    echo'小朋友你好！';
}
if ($age>=18&&$age<=40){
    echo'先生你好！';
}
if ($age>40){
    echo'大叔你好！';
}

$hour=1;   //当前时间的小时
if($hour==23||$hour==0){
    echo '当前是子时';
}elseif ($hour==1||$hour==2){
    echo '当前是丑时';
}elseif ($hour==3||$hour==4){
    echo '当前是寅时';
}elseif ($hour==5||$hour==6){
    echo '当前是卯时';
}elseif ($hour==7||$hour==8){
    echo '当前是辰时';
}elseif ($hour==9||$hour==10){
    echo '当前是巳时';
}elseif ($hour==11||$hour==12){
    echo '当前是午时';
}elseif ($hour==13||$hour==14){
    echo '当前是未时';
}elseif ($hour==15||$hour==16){
    echo '当前是申时';
}elseif ($hour==17||$hor==18){
    echo '当前是酉时';
}elseif ($hour==19||$hour==20){
    echo '当前是戌时';
}elseif ($hour==21||$hour==22){
    echo '当前是亥时';
}

//switch适合值确切对应结果的代码跳转，结构更加清晰，
switch ($hour){
    case 1:
    case 2:  echo '当前是丑时';break;
    case 3:
    case 4:  echo '当前是寅时';break;
    case 5:  echo '当前是卯时';break;
    case 6:  echo '当前是卯时';break;
}