<?php

//单态设计模式(单例模式) 一个类只能实例化一个对象 static 独立写出来
/**
*类外不能new ----- 构造方法 私有化
*类中提供一个方法 ---  返回对象 静态方法
*类外需要调用这个方法 ---  类名::方法名()
*定义成员属性存储对象 ----  静态
*在方法中进行判断
*/
class Demo
{
	//成员属性 存储对象
	static public $obj = null;
	
	private function __construct()
	{
		
	}
	
	//提供一个产生对象方法
	static public function getObj()
	{
		if (is_null(self :: $obj)) {
			self::$obj = new Demo;
		}
		return self::$obj;
	}
}

var_dump(Demo :: getObj());
var_dump(Demo :: getObj());
var_dump(Demo :: getObj());
var_dump(Demo :: getObj());

