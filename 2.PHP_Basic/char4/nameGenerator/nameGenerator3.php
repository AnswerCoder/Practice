<?php
/** Created by PhpStorm. User: zhangyunpeng(zyxp1015@gmail.com)  Time:2018/7/17 9:07  **/
$lastNameElement=$_REQUEST['lastNameElement']??'';
if ($lastNameElement!=''){
    $f=fopen('names.txt','a');
    //$lastNameElement=$lastNameElement.'，';
    $lastNameElement.='，';
    fwrite($f,$lastNameElement);
}
$firstName=['张','李','边','杨','黄','田','赵','左','孙'];
$fileHandler=fopen('names.txt','r');
$str=fread($fileHandler,filesize('names.txt'));
$lastName=explode('，',$str);

$n1=rand(0,7);
$n2=rand(0,count($lastName)-2);         //count计算数组成员长度
$n3=rand(0,count($lastName)-1);
echo '随机名称：'.$firstName[$n1].$lastName[$n2].$lastName[$n3];
?>

<form action="">
    名字录入：<input type="text" name="lastNameElement">
    <input type="submit">
</form>


<?php
$string='你，你，你，你是哪个单，单位的';
$word=explode('，',$string);
echo count($word);
?>