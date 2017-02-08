<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * $this 应用
 * 一个类是不是灵活一些,可扩展性
 * @author leifengjie <1094853740@qq.com>
 */
class Car{

	//成员属性
	public $name = "法拉利";
	public $age = "30";

	//成员方法
	public function pao(){

		//列表对象本身
		$this->name = "奥迪";
		return $this->name."正在跑……";

	}

	public function biaoche(){

		echo $this -> pao(); //调用类中的成员方法
		return "正在飚……";

	}

}

//实例化一个对象
$obj = new Car();
echo $obj -> biaoche();