<?php
/**
 * Created by PhpStorm.
 * User: zhangyunpeng(zyxp1015@gmail.com)
 * Time:2018/7/17 9:32
 **/

$fileHandler=fopen('names.txt','r');    //打开文件句柄
$str=fread($fileHandler,filesize('names.txt'));
$lastName=explode('，',$str);

//不需要重复执行的代码从函数摘出来，可以大幅节约运算时间
function nameMaker(){
    $firstName=['张','李','边','杨','黄','田','赵','左','孙'];
    global $lastName;
    $maxLength=count($lastName)-1;
    $n1=rand(0,7);
    $n2=rand(0,$maxLength-1);         //count计算数组成员长度
    $n3=rand(0,$maxLength);
    return $firstName[$n1].$lastName[$n2].$lastName[$n3];
}
$file=fopen('nameOuput.txt','w');
$time1=microtime(true);
for ($i=0;$i<20000;$i++){
    $name=nameMaker();
    $name=$name."\n";
    fwrite($file,$name);
}
$time2=microtime(true);
echo $time2-$time1.'s';