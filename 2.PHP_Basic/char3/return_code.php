<?php
/** Created by PhpStorm. User: zhangyunpeng  Time:2018/7/14 14:52**/
//function a(){
//    echo 123;
//    echo 'abc';
//    return 55;      //return会终结函数
//    echo 77;
//}
//echo a();

function b($boolean){
    if ($boolean){
        return '这是真！';
        //return;                     //return可以不返回值，仅作结束函数的作用
    }else{
        return '这是假！';
        //return;
    }
    echo '这里是大结局';
}
echo b(true);