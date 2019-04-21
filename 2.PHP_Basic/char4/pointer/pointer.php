<?php
/**
 * Created by PhpStorm.
 * User: zhangyunpeng(zyxp1015@gmail.com)
 * Time:2018/7/17 10:39
 **/
$f=fopen('dome.txt','r+');//r将指针设定在文件开始，a将文件指针设定在文件末尾

//指针决定着对该文件读或写的起始位置
//读或写会改变指针的位置
//fseek($f,3);    //设定文件指针位置为3
echo '当前指针指向：'.ftell($f).'<br>';
echo fwrite($f,'!');
echo '当前指针指向：'.ftell($f).'<br>';
echo fwrite($f,'#');
echo '当前指针指向：'.ftell($f).'<br>';


$file=fopen('dome2.txt','r+');
fseek($file,4);
fwrite($file,'study');

