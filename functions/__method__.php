<?php
	class a{
		public function demo(){
			echo __METHOD__.PHP_EOL;
		}
	}
	$obj = new a();
	//$obj->demo();
	function say(){
		echo __METHOD__;
	}
	say();
