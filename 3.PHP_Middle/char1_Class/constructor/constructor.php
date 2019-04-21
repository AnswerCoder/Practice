<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/11/29 22:54
 **/
/***************************构造函数construct***************************/
//构造函数可以使一个对象有初始值
class Lottery{
    public $numbers;
    function __construct($a=7){
        for($i=0;$i<$a;$i++){
            $this->numbers[]=rand(1,31);
        }
    }
}
$lottery1=new Lottery(8);
var_dump($lottery1->numbers);