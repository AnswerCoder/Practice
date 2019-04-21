<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/12/8 17:15
 **/
/**************exec执行SQL的编辑（改）*****************/
$db=new PDO('mysql:host=localhost;dbname=school','root','123456');
//update 表名 set 字段=数值... where 条件
//用exec可以返回影响到的记录条数
$re=$db->exec('update teather set wage=10000,name="李威" where id=4');
var_dump($re);