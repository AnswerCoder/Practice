<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/11/26 20:53
 **/
/***********序列化保存复杂数据*************/
$arr=['name'=>'陈星','gender'=>'男'];
$arr['height']=178;

//匿名对象
$obj=new stdClass();    //new stdClass()就是建立一个新的匿名对象
$obj->name='李岚';      //匿名对象扩充成员比较有条理
$obj->gender='女';
$obj->height=167;



$s=serialize($obj);         //将数组或对象转换成字符串
$f=fopen('data.dat','w');
fwrite($f,$s);

$f2=fopen('data.dat','r');
$s2=fread($f2,filesize('data.dat'));

$arr1=unserialize($s2);     //将字符串转换为数组或对象
var_dump($arr1);