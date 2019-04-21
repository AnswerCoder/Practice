<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/11/26 20:35
 **/
/******匿名对象VS关联数组******/
//关联数组
$arr=['name'=>'陈星','gender'=>'男'];
$arr['height']=178;
echo $arr['name'];

//匿名对象
$obj=new stdClass();    //new stdClass()就是建立一个新的匿名对象
$obj->name='李岚';      //匿名对象扩充成员比较有条理
$obj->gender='女';
$obj->height=167;
echo $obj->name;      //语法结构上，易于被识别


