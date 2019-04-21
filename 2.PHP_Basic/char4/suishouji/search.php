<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/9/18 23:18
 **/

$target=$_REQUEST['target']??'';
$target=trim($target);
if($target){
    //strpos()函数   作用：判断一个字符的位置或判断一个字符串在另一个字符串中是否存在
    $f=fopen('memo.txt','r');
    $s=fread($f,filesize('memo.txt'));
    $result=strpos($s,$target);
    if ($result){
        echo $target.'存在';
    }else{
        echo $target.'不存在';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>随手查</title>
</head>
<body>
<form action="">
    <input type="text" name="target">
    <input type="submit">
</form>
</body>
</html>
