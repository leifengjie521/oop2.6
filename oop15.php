<?php

	header("Content-Type:text/html;charset=utf-8");

	/**
	 *  构造方法和析构方法
	 * 一个类是不是灵活一些,可扩展性
     * 构造方法 __construct() 类在实例化一个对象的时候会自动调用构造方法
	 * @author leifengjie <1094853740@qq.com>
	 */
	class Bird{

	public $name = "秃鹫";
	public $age  = "10";

	//构造方法 初始化 __construct
	public function  __construct(){

		echo "我有一只秃鹫";

	}

	//飞的方法
	public function fly(){

		return $this->name."正在飞……";

	}

	//析构方法
	public function __destruct(){

		echo "咣当撞到了火箭";

	}

}

$tujiu = new Bird();
echo $tujiu -> fly();




