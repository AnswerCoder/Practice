<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/12/2 20:54
 **/

/***********************类的继承***********************/

class Animal{                                                       //父类
    public $name='动物';
    function walk(){
        echo $this->name.'在走!';
    }
}

class Dog extends Animal{                                          //子类

}

class Cat extends Animal{
    public $name='猫';                                             //子类属性可重新定义
}

$snoopy=new Cat();
$snoopy->walk();