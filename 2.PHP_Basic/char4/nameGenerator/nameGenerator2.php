<?php
/** Created by PhpStorm. User: zhangyunpeng(zyxp1015@gmail.com)  Time:2018/7/17 8:30  **/
$firstName=['张','李','边','杨','黄','田','赵','左','孙'];
$fileHandler=fopen('names.txt','r');
$str=fread($fileHandler,filesize('names.txt'));
$lastName=explode('，',$str);
//$lastName=['萱','爽','瑞','磊','文','宁','伟','鑫','云','军','鹏','菲','怡','华','颖','易','佳',' '];

$n1=rand(0,7);
$n2=rand(0,15);
$n3=rand(0,16);
echo $firstName[$n1].$lastName[$n2].$lastName[$n3];