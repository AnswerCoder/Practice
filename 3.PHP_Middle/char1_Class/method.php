<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/11/29 22:05
 **/
/************************this******************/
Class Human{
    public $name;
    public $age;
    function intro(){
        echo'我是'.$this->name.',今年'.$this->age.'岁。';      //this 可以在不同环境中代表不同的对象
    }
}

$xiaoHong=new Human();
$xiaoHong->name='张姊红';
$xiaoHong->age=19;
$xiaoHong->intro();                                         //this就代表xiaoHong

$xiaoMing=new Human();
$xiaoMing->name='王子明';
$xiaoMing->age=20;
$xiaoMing->intro();                                         //this就代表xiaoMing

$xiaoHong->intro();