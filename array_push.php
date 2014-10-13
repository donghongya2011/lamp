<?php
	$a = array('001'=>array(1),'002'=>array(2));
	$b = array('D1'=>array('D1'));
	$c = array_merge($a,$b);
	print_r($c);
