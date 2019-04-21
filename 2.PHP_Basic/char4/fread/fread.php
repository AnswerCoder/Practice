<?php
/**
 * Created by PhpStorm.
 * User: zhangyunpeng(zyxp1015@gmail.com)
 * Time:2018/7/17 10:18
 **/
/********************用fread()读取超大文件*********************/

$f=fopen('video.mp4','r');
$str=fread($f,'10240');
$f2=fopen('video2.mp4','w');
fwrite($f2,$str);
