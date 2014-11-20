<?php
	$return = array('a');
	$arr1 = array();
	$arr2 = array(2);
	$arr3 = array(3);

	function filter_array(&$return,$arr1,$arr2,$arr3){
		$args = func_get_args();
		array_shift($args);
		foreach($args as $v){
			if(!empty($v)){
				$return[] = $v;
			}
		}
	}

	filter_array($return,$arr1,$arr2,$arr3);
	var_dump($return);
