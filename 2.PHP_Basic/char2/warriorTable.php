<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/8 11:16**/
$warriors=[
    ['name'=>'张辽','strength'=>'98','wisdom'=>'80'],
    ['name'=>'庞统','strength'=>'32','wisdom'=>'98']
];
for ($i=0;$i<20;$i++){
    $warriors[]=['name'=>'武将'.($i+1),'strength'=>rand(10,99),'wisdom'=>rand(10,99)];
}

//foreach ($warriors as $value){
//    echo $value['name'].'，武力值：'.$value['strength'].'，智力值：'.$value['wisdom'].'<br>';
//}

echo '<table>';
echo '<tr>';
echo '<td>名字</td><td>武力</td><td>智力</td>';
echo '</tr>';
foreach ($warriors as $wujiang){
      echo '<tr>';
      foreach ($wujiang as $value){
          echo '<td>';
          echo $value;
          echo '</td>';
      }
      echo '</tr>';
}
echo'</table>';
?>
<style>
    td{
        border: solid 1px;margin: 0;padding: 0;
    }
</style>
