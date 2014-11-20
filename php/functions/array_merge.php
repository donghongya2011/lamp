<?php
	$a = array(
			'888893553'=>array(
				'id'=>1231,
				'tags'=>array(1,2)
				));
	$b = array(
			'D1'=>array(
				'id'=>'D1',
				));
//	foreach($b as $k=>$v){
//		$a[$k] = $v;
//	}
	print_r(array_merge($a,$b));
//	print_r($a);
