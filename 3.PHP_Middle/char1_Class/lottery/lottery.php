<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/11/29 22:16
 **/
/**************************可以自我分析的随机彩票号，进一步认识方法******************************/
class Lottery{
    public $numbers;
    public $sum;
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
}

$lottery1=new Lottery();
$lottery2=new Lottery();
$lottery3=new Lottery();

$lottery1->createNumbers();
$lottery2->createNumbers();

var_dump($lottery1->numbers);
$lottery1->sum=$lottery1->sum();
var_dump($lottery1->sum);
var_dump($lottery2->numbers);
var_dump($lottery2->sum());