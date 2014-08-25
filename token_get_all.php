<?php
	// coding ..
	$str = file_get_contents('./test.php');	
//	$token = token_get_all($str);
//	print_r($token);
	debug_zval_dump($str);
