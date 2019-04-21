<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/11/26 22:11
 **/

/**************************使用对象让代码更整洁*******************************/

//两个人和两个东西： 小刚，小红，电脑，麦克风

//代码很乱，容易弄混
$name1='小刚';
$name2='小红';
$age1=19;
$age2=22;
$hobby1='pc游戏';
$hobby2='唱歌';
$width='35cm';
$color='白色';
$band='联想';
$band2='利声';
$height='15cm';

//使用对象
$xiaoGang=new stdClass();
$xiaoGang->name='小刚';
$xiaoGang->age=19;
$xiaoGang->hobby='pc游戏';

$pc=new stdClass();
$pc->width='35cm';
$pc->color='白色';
$pc->band='联想';

$xiaoHong=new stdClass();
$xiaoHong->name='小红';
$xiaoHong->age=22;
$xiaoHong->hobby='唱歌';

$microphone=new stdClass();
$microphone->band='利声';
$microphone->height='15cm';
