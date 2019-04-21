<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/12/6 22:14
 **/
/********************自编一组工具，static静态方法***********************/
//加static后可以不用实例化类，使用 “类名::属性（方法）”的方式直接调用
//静态方法主要是给方法归类
class LineTools{
   static function doubleLinePrint(){
        echo '===============================';
    }
   static function singleLinePrint(){
        echo '-------------------------------';
    }
    static function crossLinePrint(){
        echo 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
        echo self::doubleLinePrint();             //this :代表自身这个对象，有实例化对象后才可使用； self：代表自身这个类
    }
}
LineTools::crossLinePrint();

class Counter{
   static function sum($a,$b){
        return $a+$b;
    }
   static function multiple($a,$b){
        return $a*$b;
    }
    static function devide($a,$b){
        return $a/$b;
    }
}
Counter::sum(1,2);