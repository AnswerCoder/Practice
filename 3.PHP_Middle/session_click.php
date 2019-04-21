<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/12/9 17:02
 **/
/*********点击数记录器，初识session*************/
//session:进程，对话，临时将数据记录在服务器
//不用考虑页面记录数值
$cli=$_REQUEST['cli']??'';  
session_start();       //启用session
if ($cli){
    $_SESSION['cli']??'';       //避免无值时报错！
    $_SESSION['cli']+=1;
}
echo $_SESSION['cli']??'';
?>

<form action="">
    <input type="submit" value="点击" name="cli">
</form>