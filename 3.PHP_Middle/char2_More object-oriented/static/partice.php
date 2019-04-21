<?php
/**
 *Created by PhpStorm.
 *User: Brian(zyxp1015@gmail.com)
 *Time: 2018/12/6 22:42
 **/
/*
 * 题目：设计一个类，里面有静态属性$a，动态属性$b，建立一个方法plus，每次运行以后为a和b各加1。将该类实例化10次，每次实例化后运行一次plus，最后a和每个实例中的b分别是多少
 */
class A{
    static public $a=1;
    public $b=1;
    public function plus(){
        self::$a=(self::$a)+1;
        $this->b=$this->b+1;
    }
}
for ($i=0;$i<10;$i++){
    $A1=new A();
    $A1->plus();
    echo $A1->b.'<br>';
}
echo A::$a;