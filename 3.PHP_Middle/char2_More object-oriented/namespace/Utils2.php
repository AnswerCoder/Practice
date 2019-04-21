<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/12/6 22:14
 **/
/********************自编工具的管理问题，命名空间***********************/
//情景：包管理工具，代码世界统一，别人的代码可以随便下载，别人的代码中可能与自己写的类重名，这是就要加入namespace来进行区分
namespace brian\Line;
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
