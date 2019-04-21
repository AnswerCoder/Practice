<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/8 10:32**/
$phoneNumberList=[];
for ($i=0;$i<100;$i++){
    $perfixNumber=rand(1,3);
    if ($perfixNumber==1){
        $start=13;
    }elseif ($perfixNumber==2){
        $start=15;
    }else{
        $start=18;
    }
    $phoneNumberList[]=$start.rand(100000000,999999999);
}
foreach ($phoneNumberList as $key=>$value){
    echo '第'.($key+1).'个：   '.$value.'<br>';
}

