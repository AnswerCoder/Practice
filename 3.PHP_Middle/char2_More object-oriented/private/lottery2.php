<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/11/29 22:16
 **/
/**************************private保护属性，完善彩票程序******************************/
/**************************公有方法访问私有属性，继续探讨彩票程序************************/
class Lottery{
    private $numbers;
    function createNumbers(){
        for($i=0;$i<7;$i++){
            $this->numbers[]=rand(1,31);
        }
    }
    function sum(){
        $result=0;
        foreach($this->numbers as $n){
            $result+=$n;
        }
        return $result;
    }
    function getNumbers(){
        return $this->numbers;
    }
}

$lottery1=new Lottery();
$lottery2=new Lottery();
$lottery3=new Lottery();

$lottery1->createNumbers();
$lottery2->createNumbers();

var_dump($lottery1->getNumbers());
var_dump($lottery1->sum());
var_dump($lottery2->getNumbers());
var_dump($lottery2->sum());