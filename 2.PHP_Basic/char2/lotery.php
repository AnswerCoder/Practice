<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/8 8:52**/
//$n1=rand(1,33);
//$n2=rand(1,33);
//$n3=rand(1,33);
//$n4=rand(1,33);
//$n5=rand(1,33);
//$n6=rand(1,33);
//$n7=rand(1,16);

//数组
//1.使用array生成数组
$number=array(rand(1,33),rand(1,33),rand(1,33),rand(1,33),rand(1,33),rand(1,33),rand(1,16));
//2.简化写法
$number1=[1,3,4.2,'abc we','萱','_'];
$str=implode(' ',$number);
echo $str;
?>
<br>
生成的双色球号码：<?php echo $number[0].' ';echo $number[1].' ';echo $number[2].' ';echo $number[3].' ';echo $number[4].' ';echo $number[5].' ';echo $number[6].' ';?>
