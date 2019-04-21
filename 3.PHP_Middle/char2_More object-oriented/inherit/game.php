<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/12/2 21:08
 **/
/**********************了解类的继承，设计游戏角色***************************/

class Character{
    public $name;
    public $wise;
    function walk(){
        echo '走动';
    }
    function attack(){
        echo '攻击';
    }
}

class Warrior extends Character{

}
class Magition extends  Character{

}

$w1=new Warrior();
$w2=new Magition();