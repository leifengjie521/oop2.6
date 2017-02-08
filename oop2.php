<?php
	header("Content-Type:text/html;charset=utf-8");

	/**
	 * 抽象一个类
	 * @author leifengjie <1094853740@qq.com>
	 */
	 
	class Car{
		
		public $name = "兰博基尼";
		public $age = "30";
		public $color = "蓝色";
		
		public function piaoyi(){
			
			return "正在漂移……";
		}
		
		public function pao(){
			
			return "正在跑……";
		}
		
	}
	class  Person{
		
		public $name = "小明";
		public $age = "15岁";
		public $sex = "男";
		
		
		public function shangxue(){
			
			return "还在上小学";
			
		}
		public function papapa(){
			
			return "和女同学啪啪啪";
			
		}
	}
	
	$obj = new Car();
	// var_dump($obj);
	echo $obj -> color;
	echo $obj -> name;
	echo $obj -> piaoyi();
	echo "<br/>";
	$obj1 = new Person();
	// var_dump($obj);
	echo $obj1 -> name;
	echo $obj1 -> sex;
	echo $obj1 -> age;
	echo $obj1 -> shangxue();
	echo $obj1 -> papapa();