<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/11 16:58**/

//形参：形式参数
//实参：实际参数
function hrCreator($k){
    for ($i=0;$i<$k;$i++){
        echo '<hr>';
    }
}
hrCreator(4);