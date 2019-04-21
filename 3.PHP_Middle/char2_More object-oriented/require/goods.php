<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/12/2 21:15
 **/
/****************商品信息陈列，面向对象练习，require*******************/
//目的：学会使用require_once关键字;学会使用类设计数据结构

require_once 'Commodity.php';           //引入其他文件

$arr=[];
for ($i=1;$i<21;$i++){
    $commodity=new Commodity();
    $commodity->name='商品'.$i;
    $commodity->brand='品牌'.$i;
    $commodity->price=rand(1,9999)/100;
    $arr[]=$commodity;
}
echo'<table>';
    echo '<tr>';
        echo ' <td>名称</td> ';
        echo ' <td>品牌</td> ';
        echo ' <td>价格</td> ';
    echo '</tr>';
foreach ($arr as $commodity){
    echo '<tr>';
    echo ' <td>'.$commodity->name.'</td> ';
    echo ' <td>'.$commodity->brand.'</td> ';
    echo ' <td>'.$commodity->price.'</td> ';
    echo '</tr>';
}
echo'</table>';
?>
<style>
    table,tr{margin: 0;padding: 0;}
    td{border: solid 1px;color: #9B2B0F;margin: 0;padding: 0;}
</style>


