<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/11/26 21:24
 **/
/****************使用类，方便记录信息****************************/
//class:类（分类）
//std: starnderd 标准
/*方法极其繁琐
$dog1=new stdClass();
$dog1->name='Bob';
$dog1->type='黑贝';
$dog1->height='78cm';

$dog2=new stdClass();
$dog2->name='Darsy';
$dog2->type='黑贝';
$dog2->height='76cm';

$dog3=new stdClass();
$dog3->name='Tony';
$dog3->type='黑贝';
$dog3->height='81cm';

$dog4=new stdClass();
$dog4->name='Eddy';
$dog4->type='黑贝';
$dog4->height='55cm';
*/
//class关键字：用来声明一个类
/*类，是创建对象的设计蓝图
   属性：即是变量，对象内的变量，我们称之为属性
   类中：可以为对象设计默认值，提前写好的一个属性*/
//public： 类中属性的前缀

//类中属性必须是严格规定的（写死的），不能是函数返回
class Dog{
   public $type='黑贝';
}
$dog1=new Dog();
$dog1->name='Bob';
$dog1->height='78cm';

$dog2=new Dog();
$dog2->name='Darsy';
$dog2->height='76cm';

$dog3=new Dog();
$dog3->name='Tony';
$dog3->height='81cm';

$dog4=new Dog();
$dog4->name='Eddy';
$dog4->height='55cm';
var_dump($dog1);

