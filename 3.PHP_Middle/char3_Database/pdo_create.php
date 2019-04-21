<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/12/7 23:01
 **/
/**************php连接mysql并建库建表*******************/
//使用PDO对象连接MySQL；在PHP中执行SQL语句

//PDO：php database object
//PDO构造函数：（参数1：‘数据库类型：host=主机地址’，参数2：‘用户名’，参数3：‘密码’）
$db=new PDO('mysql:host=localhost','root','123456');
$db->query('create database banana;');
$db->query('use banana;');
$db->query('create table monkey(id INT,name VARCHAR(20));');

$db->query('create database book;');
$db->query('use book;');
$db->query('create table novel(id INT,name VARCHAR(50));');