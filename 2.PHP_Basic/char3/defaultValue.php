<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/16 16:23**/
function makeHr($char='-',$amount=15){
    for ($i=0;$i<$amount;$i++){
        echo $char;
    }
}
//有默认值的参数往后放，没有默认值的参数应当往前设定
?>

<h5>ABC</h5>
<?php makeHr('=',20); ?>
<h5>ABC</h5>
<?php makeHr('+',50); ?>
<h5>ABC</h5>
<?php makeHr(); ?>
<h5>ABC</h5>
//===========================================
<?php
function lotteryCreate($local=1,$val=3){
    $number=[];
    for ($i=0; $i<7;$i++){
        $number[]=rand(1,33);
    }
    $number[$local-1]=$val;
    foreach ($number as $key=>$value){
        echo '第'.($key+1).'位:'.$value.' <br>';    //$key为数组中各个元素的键，即下标
    }
}

lotteryCreate(4,5);

