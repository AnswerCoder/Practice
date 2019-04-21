<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/12/2 20:42
 **/
/**************************公有方法访问私有属性************************/
class Password{
    private  $word;
    function __construct($pwd)
    {
        $this->word=$pwd;
    }
    function getWord(){
        $result=substr($this->word,0,3);
        $n=strlen($this->word);
        for ($i=0;$i<$n-3;$i++){
            $result.='*';
        }
        return $result;
    }
}

$doorPwd=new Password('123456');

echo $doorPwd->getWord();
