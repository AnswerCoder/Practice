<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/11/30 11:23
 **/
/********************private保护属性**********************/
//了解private的作用

//public:公开
//private:私有
class Human{
    private $name;                                   //该属性不能被外部访问
    function __construct($name)
    {
        $this->name=$name;
    }
    function intro(){
        echo '我的名字叫：'.$this->name;
    }
}

$xiaoMing=new Human('李明');
$xiaoMing->intro();

class User{
    private $username;
    private $password;
    function __construct($username,$password)
    {
        $this->username=$username;
        $this->password=$password;
    }
    function printUser(){
        echo '<br>用户名：'.$this->username.'<br>密码：'.$this->password;
    }
}
$user1=new User('admin',123456);
$user1->printUser();