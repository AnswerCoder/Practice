<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/12/7 20:44
 **/
//require不会引入文件的命名空间那个语句
//namespace命名空间相当于一个分类前缀
//namespace命名空间，可以使用反斜线
//namespace加花括号，可以并行存在多个命名空间
//use 可以提前声明一个类是在哪个命名空间下的
require_once 'Utils2.php';
use brian\Line\Counter;
$a=new Counter();
echo $a->sum(3,4);