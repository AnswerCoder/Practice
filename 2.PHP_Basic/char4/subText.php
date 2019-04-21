<?php
/*******截取字符串*********/
$s='you are a stupid dog; you are a luck pig; you are a cut cat;you are a strong bull.';
/*
 * 函数名：strlen
 * 作用：计算字符串长度
 */
$len=strlen($s);
/*
 * 函数名：substr（$a,b,c）
 * 作用： 从第b位截取字符串a,截取长度为c
 */
if ($len>20){
    $s=substr($s,0,20);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div style="width:100px;height: 50px;background-color: #ffc200;"><?php echo $s?></div>
</body>
</html>