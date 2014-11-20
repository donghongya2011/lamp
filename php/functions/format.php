<?php
	$arr = array(array(0));
	$arr1 = array(array(1));
	$arr2 = null;
	if(empty($arr2)){
		$return = $arr1;
	}else{
		$return = array_merge($arr2,$arr1);
	}
	var_dump($return);
