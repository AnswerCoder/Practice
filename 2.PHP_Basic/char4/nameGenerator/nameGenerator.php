<?php
/** Created by PhpStorm. User: zhangyunpeng(zyxp1015@gmail.com)  Time:2018/7/16 18:11  **/
//思路：随机组合性、名等字
$firstName=['张','李','边','杨','黄','田','赵','左','孙'];
$lastName=['萱','爽','瑞','磊','文','宁','伟','鑫','云','军','鹏','菲','怡','华','颖','易','佳',' '];

$names= [];
for ($i=0;$i<20;$i++){
    $n1=$firstName[rand(0,8)];
    $n2=$lastName[rand(0,16)];
    $n3=$lastName[rand(0,17)];
    $names[]=$n1.$n2.$n3;
}
$result=array_unique($names);   //避免重复
print_r($result);
echo '<br>';
foreach ($result as $value){
    echo $value.'<br>';
}