<?php
	print_r(iconv_get_encoding());exit();
	$a = '12313aa骄傲了看 ';
	echo $encode = mb_detect_encoding($a,array('GBK','ASCII','UTF-8','GB2312'));
