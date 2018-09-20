<?php

//类型约束  函数  成员方法  形参 前加  
//Array数组  类名 必须是此类实例化对象或其子类实例化对象

//Array $arr 数组
//类名 $obj  必须是此类实例化对象或其子类实例化对象
//callable $func 必须传一个函数名

function c(){}
a('c');
function a(callable $func)
{
	$func(); //c();
}


class Person
{
	public function say(Stu $obj)  //instanceof 类或子类的对象都可以true
	{
		echo $obj -> name;
	}
}

$p = new Person;
$p -> say(new Stu);

//$p -> say(new A);

$p -> say(new B);

class Stu
{
	public $name = 'stu';
}

class B extends Stu
{
	
}

class A
{
	public $name = 'a';
}

//测试 此类及其子类
$b = new B;
var_dump($b instanceof Stu);



//统计数组元素的和  array $arr
$arr = [1, 2, 6, 8, 10, 30];
//$arr = 4;
//is_array()
//echo cArrSum($arr);

function cArrSum(Array $arr)
{
	//if (is_array($arr)) {
		$sum = 0;
		foreach ($arr as $k => $v) {
			$sum += $v;
		}
		return $sum;
	//}
}






