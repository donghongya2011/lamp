<?php
	$ip = '[kkk]192.168.0.1';
	preg_match_all("/\[(.*)?\]/",$ip,$a);
	var_dump($a);
