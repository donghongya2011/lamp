<?php
	$str = 'http://shanghai.anjuke.com/sale/rd1/?kw=22762027 0';
	$a = urlencode($str);
	echo $a.PHP_EOL;
	echo rawurlencode($str);
