<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/14 14:26**/
//xx,我对你一生一世，忠贞不二！
function loveDeclaration($name1,$name2){
    echo "{$name1},{$name2}对你一生一世，忠贞不二！<br>";
}

loveDeclaration('xx','我');

function number($start,$end,$step){
    for ($i=$start;$i<$end;$i=$i+$step){
        echo $i.' ';
    }
}
number(1,10,2);