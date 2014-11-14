<?php
	$arr = array(1,2,3,4);
	foreach($arr as $k=>&$v){
		if($v == 1){
			unset($arr[$k]);
		}
	}
print_r($arr);
