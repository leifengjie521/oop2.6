<?php
	header("Content-Type:text/html;charset=utf-8");

	/**
	 * 抽象一个类
	 * @author leifengjie <1094853740@qq.com>
	 */
	 
	class Car{
		
		public $name = "乐驰";
		public $age = "30";
		public $color = "黑色";
		
		public function piaoyi(){
			
			return "正在漂移……";
		}
		
		public function pao(){
			
			return "正在跑……";
		}
		
	}
	class  Person{
		
		public $name = "小红";
		public $age = "15岁";
		public $sex = "女";
		
		
		public function shangxue(){
			
			return "还在上小学";
			
		}
		public function papapa(){
			
			return "和小明啪啪啪";
			
		}
	}
	$obj = new Car();
	var_dump($obj);
	$obj1 = new Person();
	var_dump($obj1);