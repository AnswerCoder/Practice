<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/11/30 10:55
 **/
/**************************new后面的括号，到构造函数的传值******************************/
//目的：明确实例化对象的概念，学会在实例化对象时用构造函数传值
/*
class A{
    public $b;
    function __construct($x){
        $this->b=$x;
    }
}

$a=new A(8);                     //new 以其指向的类名实例化一个对象
var_dump($a->b);
*/

class Human{
    public $name;
    public $age;
    function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
}

$xiaoHong=new Human('王红',20);
echo $xiaoHong->name.',年方'.$xiaoHong->age;