<?php
/** Created by PhpStorm. User: zhangyunpeng(zyxp1015@gmail.com)  Time:2018/7/16 17:35  **/
$handler=fopen('dome.txt','r');
$amount=filesize('dome.txt');//使用filesize()计算文件长度，动态地读取
//echo $amount;
$str=fread($handler,$amount);

$str=str_replace("\n",'<br>',$str);  //替换指定位置的字符串
echo $str;


