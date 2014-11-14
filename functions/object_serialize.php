<?php
	class a{
		public $name;
		public $sex;
		public function say(){
			echo $this->name;
		}
	}
	$obj = new a();
	print_r($obj);
	echo serialize($obj);
