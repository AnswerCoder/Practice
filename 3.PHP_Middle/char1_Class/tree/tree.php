<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/11/28 19:32
 **/
/************************模拟种树，以对象为单位的函数处理****************************/

//设计的类
class Tree{
    public $type='=>>';
    public $height=6;
}
//生成20个tree对象
$arr=[];
for ($i=0;$i<20;$i++){
    $tree=new Tree();
    $tree->height=rand(1,20);
    $arr[]=$tree;
}
//定义打印数的函数
function printTree($obj){
    for ($i=0;$i<$obj->height;$i++){
        echo $obj->type;
    }
}
//遍历打印，通过函数打印
foreach ($arr as $value){
    printTree($value);
    echo'<br>';
}