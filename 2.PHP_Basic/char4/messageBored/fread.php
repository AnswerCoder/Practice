<?php
/** Created by PhpStorm. User: zhangyunpeng(zyxp1015@gmail.com)  Time:2018/7/16 17:35  **/
$handler=fopen('dome.txt','r');
//$str=fread($handler,1000);
//echo $str.'<br>';
//指针，指着下边要处理时，从第几个字符开始。开始指写0
echo fread($handler,6);
echo fread($handler,6);
echo fread($handler,6);
echo fread($handler,7);