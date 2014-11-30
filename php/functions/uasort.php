<?php
	$arr = array(223,4,51,3286,12,93249);
	function my_sort($a,$b){
		return (mb_strlen($b,'UTF-8') -mb_strlen($a,'UTF-8'));
	}
	uasort($arr,'my_sort');
	var_dump($arr);

