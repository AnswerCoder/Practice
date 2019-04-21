<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/8 16:20**/

$a=$_REQUEST['n'] ?? null; // ?? 空值合并运算符，仅PHP7以上可使用
if($a==null){
    ;
}elseif($a%2==0){
    echo "{$a}为偶数";
}else{
    echo "{$a}为奇数";
}
?>
<!--自身传值-->
<form action="">
    奇偶数判断器：<input type="text" name="n"><input type="submit">
</form>
