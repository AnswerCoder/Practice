<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/8 11:00**/
//associateArray(关联数组)
$arr=['name'=>'小乔','age'=>'19']; //关联
$arr2=['小乔','19'];  //普通

//$person1_name='张辽';
//$person1_strength=98;
//$person1_wisdom=80;
//
//$person2_name='庞统';
//$person2_strength=32;
//$person2_wisdom=98;
$person1=['name'=>'张辽','strength'=>'98','wisdom'=>'80'];
$person2=['name'=>'庞统','strength'=>'32','wisdom'=>'98'];
echo "{$person1['name']},武力值是{$person1['strength']}";