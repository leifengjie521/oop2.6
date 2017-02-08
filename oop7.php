<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 抽象一个类
 * 调有成员属性和成员方法
 * 修改成员属性的值
 * 调用成员方法添加参数
 * @author leifengjie <1094853740@qq.com>
 */
class Car{

	//成员属性
	public $name = "法拉利";
	public $age = "15";

	//成员方法
	public function pao($s){

		return $s."正在空翻……";

	}

	public function biaoche(){

		return "正在飚……";

	}

}

$obj = new Car();

echo $obj -> name;
$obj -> name = "阿斯顿马丁";
echo "<br/>";
echo $obj -> name;
echo "<br/>";
echo $obj -> pao("琨琨");
