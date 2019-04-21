<?php
/**
 * Created by PhpStorm.
 * User: zhangyunpeng(zyxp1015@gmail.com)
 * Time:2018/7/18 9:41
 **/

$f=fopen('dome.txt','r');
for ($i=0;$i<filesize('dome.txt');$i++){
    $s= fread($f,1);
    echo $s;
    if ($s=="\n"){
        break;      //终止循环
    }
}
echo '<br>';
$i=1;
while($i){
    echo $i;
    $i++;
    if($i>10){
        break;
    }
}

