<?php
/** Created by PhpStorm. User: zhangyunpeng(zyxp1015@gmail.com)  Time:2018/7/16 17:03  **/

////fopen返回一个文件句柄，用来控制该文件
//$fileHandler=fopen('dome.txt','a');
////fwrite用来写入文件
//fwrite($fileHandler,'我爱你！祖国');

$name=$_REQUEST['name'];
$content=$_REQUEST['content'];
$contact=$_REQUEST['contact'];

$fileHandler=fopen('dome.txt','a');
fwrite($fileHandler,"姓名：{$name}\n联系方式：{$contact}\n留言：{$content}\n\n");
