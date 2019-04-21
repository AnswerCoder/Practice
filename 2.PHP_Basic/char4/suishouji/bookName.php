<?php
/**
 * Created by PhpStorm.
 * User: zhangyunpeng(zyxp1015@gmail.com)
 * Time:2018/7/18 10:19
 **/

$f=fopen('memo.txt','r+');
$str=fread($f,filesize('memo.txt'));
$books=explode('，',$str);
$books2=[];
foreach ($books as $book){
    $books2[]='《'.$book.'》';
}
$str=implode('，',$books2);      //把数组变成字符串1
echo $str;

fseek($f,0);
fwrite($f,$str);