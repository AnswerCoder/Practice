<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/12/9 16:46
 **/
/**************SQL删除记录（删）**************/
//delete : 删除
//delete后不加where将会删除表内所有记录
$db=new PDO('mysql:host=localhost','root','123456');
$db->exec('use school');
$db->exec('delete from teather where id=5');