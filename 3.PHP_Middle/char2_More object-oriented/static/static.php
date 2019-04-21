<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/12/6 21:53
 **/
/********************static静态方法**************************/

class Dog{
    public  $n=0;
    static public $n2=0;                            //静态属性，可以为数值归类，为一个类进行计数或作为计算的前提
    static public function eat(){
        echo '我在吃东西';
    }
}

$d1=new Dog();
$d2=new Dog();

Dog::$n2=8;
Dog::$n2=9;
echo Dog::eat();