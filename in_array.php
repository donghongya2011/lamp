<?php
	$arr = array('a','b');
	$des = array('a'=>1,'c'=>2);
	function missingVerify($arr,$des){
		foreach($des as $key=>$value){
			if(!in_array($key,$arr)){
				echo 1;
			}
		}
	}

	missingVerify($arr,$des);
