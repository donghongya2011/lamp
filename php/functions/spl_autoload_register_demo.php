<?php
	function loadprint($class){
		exit('1');
		$file = $class.'.php';
		require_once($file);
	}
	spl_autoload_register('loadprint');
	$obj = new spl_autoload_register();
	$obj->say();
