<?php
	$str = 'dyzfy-fx5-l2';
	$arr = array(1=>'dyzfy-fx5-l2');
	if(preg_match('/(l2)/',$arr[1])){
		echo 1;
	}else{
		echo 2;
	}
