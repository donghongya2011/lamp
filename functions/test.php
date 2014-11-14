<?php
	$str = 'http://www.php.net/manual/zh/function.urlencode.php';
	$en = urlencode($str);
	echo $en.PHP_EOL;
	$de = urldecode($en);
	echo $de;
	echo file_get_contents($de);
