<?php
	//$a = '1347412188';
	//echo date("Y-m-d h:i:s",$a);
	$a = '2014-09-15 13:21:08';
	echo strtotime($a);
	echo date("Y年m月d日",strtotime($a));
