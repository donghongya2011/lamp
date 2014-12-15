<?php
	$arr = array(1,2,3,4,5,6,7);
	$a = array_slice($arr,0,3);
	$b = array_slice($arr,3);
	$c = array_slice($arr,1,-2);
	var_dump($c);
