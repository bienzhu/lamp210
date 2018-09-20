<?php

//引用类型 : 对象 默认  资源  可以通过clone
//值类型: 整型 浮点型 布尔 字符 数组 null

class Person
{
	public $name;
	
	//魔术方法 __clone() clone关键字时自动触发
	public function __clone()
	{
		$this -> name = 'cloneobj';
	}
}

$p1 = new Person;

$p2 = $p1; //引用 就相当于起别名
//var_dump($p1);
//var_dump($p2);


$p3 = clone $p1; //克隆 产生一个新的对象
var_dump($p1);
var_dump($p3);

//== 属性名称 个数 以及值相同的
var_dump($p1 == $p3);
//var_dump($p1 != $p3);

//是否是同一个对象
var_dump($p1 === $p3);
var_dump($p1 === $p2);
/*
$a = 1;
$b = $a;
$b = 3;
echo $a;
echo $b;
*/

/*
$a = 1;
$b = &$a;
$b = 3;
echo $a;
echo $b;
*/
