<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/8 16:06**/
$a=$_REQUEST['number1'];
$b=$_REQUEST['number2'];
if($a>$b){
    echo "两个数中比较大的那个数是{$a}";
}elseif($a<$b){
    echo "两个数中比较大的那个数是{$b}";
}else{
    echo '两个数一样大';
}