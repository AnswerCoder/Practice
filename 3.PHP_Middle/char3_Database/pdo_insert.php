<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/12/7 23:01
 **/
/**************php连接mysql并插入数据（增）*******************/
//使用PDO对象连接MySQL；在PHP中执行SQL语句

//PDO：php database object
//PDO构造函数：（参数1：‘数据库类型：host=主机地址’，参数2：‘用户名’，参数3：‘密码’）
$db=new PDO('mysql:host=localhost','root','123456');
$db->query('use school;');
$db->query('insert teather (id,name,wage) values (5,"杨天",5000)');
