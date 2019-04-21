<?php
/**
 * Created by PhpStorm.
 * User: zhangyunpeng(zyxp1015@gmail.com)
 * Time:2018/7/18 9:55
 **/

$f1=fopen('dome.txt','r+');
$f2=fopen('domeCopy.txt','a');
for($i=0;$i<filesize('dome.txt');$i++){
    $s=fread($f1,1);
    if($s==';'){
        continue;           //打断当前循环
    }
    fwrite($f2,$s);
}
