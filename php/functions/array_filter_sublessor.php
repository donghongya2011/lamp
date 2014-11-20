<?php
	$arr = array(1,2,'D1','A3','d1','D2');
	function array_filter_sublessor(&$arr){
		$return = array();
		foreach($arr as $key=>$v){
			if(strpos($v,'D') !== false){
				$return[] = $v;
				unset($arr[$key]);
			}
		}
		return $return;
	}
	var_dump(array_filter_sublessor($arr));
	var_dump($arr);
