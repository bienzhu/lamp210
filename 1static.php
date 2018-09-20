<?php
error_reporting(E_ALL & ~E_DEPRECATED);
/*
static关键词
修饰成员属性和成员方法
特点：
属于类 对象共有的
效率高

访问方式
在本类中：self::$成员属性名  self::方法名()
在类外：类名::$成员属性名 类名::方法名()


注意事项：
在静态方法中 static 不能出现非静态的内容($this)

一个方法中如果没有使用$this , 默认为静态方法

静态方法中访问本类属性  属性应该是静态的  

*/

class Test
{
	static public $classid = 'lamp210';
	static public $name;
	
	public function __construct($name)
	{
		self :: $name = $name;
	}
	
	static public function say()
	{
		return '我的班级是：'.self :: $classid.'我的名字是：'.Test::$name.'<br>';
	}
	
	//一个方法中如果没有使用$this , 默认为静态方法
	public function func1()
	{
		echo 'aaaaaaaaaa<br>';
	}
	
}

new Test('小甜甜');
//在类外调用静态方法
echo Test :: say();

Test :: func1();

