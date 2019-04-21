<?php
/**
 * Created by PhpStorm.
 * User: zhangyunpeng(zyxp1015@gmail.com)
 * Time:2018/7/17 10:05
 **/

$a=5;//全局变量
//函数有局部的变量作用域

function sum(){
    //$a=8;//局部变量
    global $a;   //引入外部全局变量，在函数中使用
    echo $a+$a;
}
sum();
echo '<br>'.$a;
echo '<br>'.'<br>'.'<br>';
$b=3;
$c=1.55;
function mul(){
    global $b,$c;
    echo $b*$c;
}
mul();