<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/12/8 15:45
 **/

/************用PHP的PDO对象查记录（查）*************/
$db=new PDO('mysql:host=localhost','root','123456');
$db->query('use school');
$statement=$db->query('select * from teather');     //query之后返回一个statement表达式对象
$arr=$statement->fetchAll();          //fetchAll得到所有select到的记录至一个数组

echo '<table>';
echo '<tr>
<td>序号</td><td>姓名</td><td>工资</td>
</tr>';
foreach ($arr as $v){
    echo '<tr>';
    echo '<td>'.$v['id'].'</td>';
    echo '<td>'.$v['name'].'</td>';
    echo '<td>'.$v['wage'].'</td>';
    echo '</tr>';
}
echo '</table>';
?>
<style>
    table,tr,td{margin: 0;padding: 0;}
    td{border: solid 1px;color: #9B2B0F;margin: 0;padding: 0;}
</style>