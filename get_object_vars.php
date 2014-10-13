<?php
	class foo {
		private $a;
		public $b=1;
		protected $c;
		public function say(){
			var_dump(get_object_vars($this));
		}
	}
	$obj = new foo();
	var_dump(get_object_vars($obj));
	echo PHP_EOL;
	$obj->say();
