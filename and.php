<?php
	$a = array(1);
	$a['third'] = $argv[0];
	$a['first']['second'] = 2;
	var_dump($a);exit();
	if(1 && say()){
		exit('1');
	}

	function say(){
		exit('2');
	}

