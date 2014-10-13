<?php
	$a = 0;
	$b = '';
	$b['a'] = 'cc';
	var_dump($a['a']?:(isset($b['a'])?$b['a']:''));
