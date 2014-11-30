<?php
	function array_to_cookie_string($cookie_array){
		 $string;
		 $i = 0;
		 foreach($cookie_array as $key=>$value){
			 if($i > 0){
				 $string .= ",";
			 }
			 $string .= $key.":".$value;

			$i++;
		 }
		return $string;
	}

	$arr = array('a'=>'a','b'=>'b','c'=>'c','d'=>'d');
	var_dump(array_to_cookie_string($arr));
