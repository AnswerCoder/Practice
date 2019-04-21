<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/11/28 19:32
 **/
/************************用方法的概念优化模拟种树实例****************************/

//设计的类
class Tree{
    public $type='=>>';
    public $height=6;
    //定义打印数的函数
    function printTree(){
        for ($i=0;$i<$this->height;$i++){
            echo $this->type;
        }
    }
}
//生成20个tree对象
$arr=[];
for ($i=0;$i<20;$i++){
    $tree=new Tree();
    $tree->height=rand(1,20);
    $arr[]=$tree;
}

//遍历打印，通过函数打印
foreach ($arr as $value){
    $value->printTree();
    echo'<br>';
}