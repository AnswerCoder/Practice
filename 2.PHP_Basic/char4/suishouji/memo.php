<?php
/**
 * Created by PhpStorm.
 * User: zhangyunpeng(zyxp1015@gmail.com)
 * Time:2018/7/18 10:09
 **/
$con=$_REQUEST['con']??'';
$con=trim($con);                         //去除字符串前后空白（包含换行符）
if ($con!=''){
    $f=fopen('memo.txt','a');
    fwrite($f,$con.'，');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>随手记</title>
    <style>
        form,input{margin: 0;padding: 0;}
    </style>
</head>
<body>
<form action="memo.php" >
    <input type="text" name="con">
    <input type="submit">
</form>
</body>
</html>
