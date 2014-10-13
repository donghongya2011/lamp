<?php
	class foo {
		public $a = 1;
		protected $b = 2;
		private $c = 3;
		public static $d = 4;
		public function __construct(){
			echo __FUNCTION__;
		}
		protected function say(){
			echo PHP_EOL.'say()'.PHP_EOL;
		}
	}

	class demo extends foo {
		public function __construct(){
			parent::__construct();
			echo get_called_class();
			parent::say();
			echo $this->a;
			echo $this->b;
			echo $this->c;exit();
			echo parent::$d;
		}
	}

	$obj = new demo();
