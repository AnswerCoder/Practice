<?php
/** Created by PhpStorm. User: zhangyunpeng Date: 2018/7/7 Time: 10:13**/
$x='中国';
$person='姚明';
echo $x.'的'.$person.'<br>';//字符串是用.运算符连接
$sentence=$person.$x;
echo $sentence.'<br>';
$y=66;
echo $sentence.$y;
echo '<br><br>';
$a='我';
$b='你';
$c='爱';
echo $a.$c.$b.'<br>';
echo $b.$c.$a;