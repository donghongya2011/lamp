<?php
	class foo {
		public static function __callStatic($name,$arg){
			print_r($arg);
		}
		public function show(){
			echo get_called_class();
		}
		public function get_instance(){
			$obj = new demo;
			return $obj;
		}
	}

	class demo {
		public function say(){
			echo get_called_class();
		}
	}

	$obj = new foo;
	//$obj::a(1,2,3,4,array(2),true);
	//$obj->show();
	$obj->get_instance()->say();

