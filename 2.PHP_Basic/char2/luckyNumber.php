<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/8 8:40**/
/**
 * 函数名称：rand(int,int)
 * 函数功能：生成随机数
 */
$number=rand(1,10);
?>

<h1>你生成的幸运数是：<?php echo $number ?></h1>
<?php
    $number1=rand(1,33);
    $number2=rand(1,33);
    $number3=rand(1,33);
    $number4=rand(1,33);
    $number5=rand(1,33);
    $number6=rand(1,33);
    $number7=rand(1,16);
    echo $number1.$number2.$number3.$number4.$number5.$number6.$number7;
?>