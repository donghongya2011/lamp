<?php
	namespace a;
	class demo {
		public $num = 1;
		public function say(){
			echo 1;		
		}
	}
	namespace b;
	class demo {
		public $num = 2;
		public function say(){
			echo $this->num;
		}
	}
	$obj = new \a\demo();
	$obj->say();
