<?php
	$a_1 = array(1);
	$a_2 = array(2);
	$a_3 = array(3);

	$b1 = 'b';
	$i = 1;
#	echo ${'b'.$i};
#	exit();

	$current_page = 3;

	for($i=1;$i<=$current_page;++$i){
		$c[] = ${'a_'.$i};
	}

var_dump($c);
