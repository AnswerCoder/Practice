<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/11/26 22:49
 **/

/*********************匿名对象的缺陷，由类设计解决*********************/
//使用类设计对象的一个好处：统一属性名
class Child
{
    public $name;
    public $age;
    public $hobby;
}

$xiaoGong=new Child();
$xiaoGong->name='小刚';
$xiaoGong->age=19;
$xiaoGong->hobby='pc游戏';

$xiaoHong=new Child();
$xiaoHong->name='小红';
$xiaoHong->age=22;
$xiaoHong->hobby='唱歌';

