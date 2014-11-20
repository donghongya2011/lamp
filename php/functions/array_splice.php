<?php
	//待插入数组
	$arr = array('a','b','c','d');
	//插入的数组,key为插入的位置,value为插入的值
	$toArr = array('1'=>'good','3'=>'job');
	foreach($arr as $key=>$val){
		if(array_key_exists($key,$toArr)){
			array_splice($arr,$key,0,$toArr[$key]);
		}
	}
	print_r($arr);
	
