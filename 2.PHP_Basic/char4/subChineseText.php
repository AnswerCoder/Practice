<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/11/9 20:46
 **/
/*******截取中文字符串*********/
$s='you are a stupid dog;你是个傻狗 you are a luck pig;你是个好运猪 you are a cut cat;你是个可爱猫you are a strong bull.你是个强牛';
//mb 处理特殊字符串的函数前缀
/*
 * 函数名：mb_strlen
 * 作用：计算特殊字符串长度，因为中文一个字占3个字符，mb前缀可以将一个中文字当成一个字符
 */
$len=mb_strlen($s);
/*
 * 函数名：mb_substr（$a,b,c）
 * 作用： 从第b位截取特殊字符串a,截取长度为c
 */
if ($len>30){
    $s=mb_substr($s,0,30);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div style="width:200px;height: 100px;background-color: #ffc200;"><?php echo $s?></div>
</body>
</html>