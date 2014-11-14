<?php
	$arr = array('a','b','c','d');
	shuffle($arr);
	$a = array_slice($arr,0,2);
	print_r($a);
