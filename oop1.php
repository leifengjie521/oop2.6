<?php
	header("Content-Type:text/html;charset=utf-8");
	/**
	 * 抽象一个类
	 * 
	 * @author leifengjie <1094853740@qq.com>
	 */

	class Car{
		//成员属性
		public $name = "法拉利";
		public $age = "40";
		public $color = "红色";
		//成员方法
		public function pao(){
			
			return $this -> name."正在跑……";
		}
		
		public function hkf(){
			
			return "正在后空翻……";
			
		}
		
	}
	
	class Dog{
		// 成员属性
		public $name = "旺财";
		public $age = "15";
		public $kind = "哈士奇";
		
		//成员方法
		
		public function eat(){
			
			return "正在吃狗粮……";
		}
		
	}
	
	$obj = new Car();
	// var_dump($obj);
	echo $obj -> color;
	echo $obj -> pao();
	echo $obj -> hkf();
	echo "<br/>";
	$obj = new dog();
	// var_dump($obj);
	echo $obj -> kind;
	echo $obj -> name;
	echo $obj -> eat();
	