<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/12/8 16:29
 **/
$val=$_REQUEST['val']??'';

$db=new PDO('mysql:host=localhost;dbname=memo','root','123456');

if ($val){
    $result=$db->exec("insert records (content) values('{$val}')");
    if ($result){
        echo '<h1>插入成功</h1>';
    }else{
        echo '<h1>插入失败</h1>';
        print_r($db->errorInfo());
    }
}
$statement=$db->query("select * from records");
//var_dump($statement->fetch());
$result=$statement->fetchAll();

echo '已记录结果：';
foreach($result as $v){
    echo "<h5>{$v['content']}</h5>";
}