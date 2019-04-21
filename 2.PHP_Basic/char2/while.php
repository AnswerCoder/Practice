<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/8 16:56**/
$paperTk=$_REQUEST['paper'] ?? 0;
$purposeTk=$_REQUEST['purpose'] ?? 0;
$purposeTk=$purposeTk*1000; //统一单位，都变成毫米
$newTk=$paperTk;
$amount=0;
while ($newTk<$purposeTk){
    $newTk=$newTk*2;
    $amount++;
}
$newTk=$newTk/1000;
echo "{$paperTk}mm的纸折叠{$amount}次就能达到或超过{$_REQUEST['purpose']}m，折叠后纸的厚度为{$newTk}m";
?>
<h1>折纸次数计算器</h1>
<form action="">
    <h4>纸的厚度：<input type="text" name="paper">毫米</h4>
    <h4>目的厚度：<input type="text" name="purpose">米</h4>
    <input type="submit"><input type="reset">
</form>
<!--用while和for两种循环打印出100以内所有可以被5整除的数-->
<?php
    //for
    for ($i=100;$i>0;$i--){
        if ($i%5==0){
            echo $i.' ';
        }else{
            ;
        }
    }
    echo'<br>';
    //while
    $i=100;
    while ($i>0){
        if ($i%5==0){
            echo $i.' ';
        }
        $i--;
    }
?>



