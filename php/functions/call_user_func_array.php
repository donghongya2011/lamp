<?php
	function foo($a,$b,$c){
		echo __FUNCTION__.($a+$b+$c);
	}

	$arr = array(1,2,3);
	call_user_func_array('foo',$arr);

	class demo {
		public function say($a,$b,$c){
			echo __METHOD__.($a+$b+$c);
		}
	}
	$obj = new demo;
	call_user_func_array(array($obj,'say'),$arr);
