<?php
	class foo{
		public function say(){
			echo __FUNCTION__;
		}

		public static function walk(){
			echo __METHOD__;
		}
	}
foo::walk();exit(0);

$obj = new foo();
$obj::say();
