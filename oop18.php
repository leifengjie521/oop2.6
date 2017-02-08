<?php

	header("Content-Type:text/html;charset=utf-8");
	
	/**
	 * 使用类和对象进行增删改查
	 * @author leifengjie <1094853740@qq.com>
	 */


	class Db{
		
		public $root = "root";		//用户名
		public $pass = "";			//密码
		public $ip = "127.0.0.1";	//IP地址
		public $dateName = "demo";	//数据库名
		
		public function __construct(){

		echo $this -> connect();

		}
	
		//连接数据库
		public function connect(){
	
			return "数据库连接成功";
	
		}
	
		//添加数据
		public function add(){
	
	
		}
	
		//删除数据库
		public function del(){
	
	
		}
	
		//更改数据
		public function edit(){
	
	
		}
	
		//查找数据
		public function lists(){
	
	
		}
	
		//关闭数据库
		public function close(){
	
	
	
		}

	}

	$obj  = new Db();
		
	 