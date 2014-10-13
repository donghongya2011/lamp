<?php
	$arr = array(
			0=>array(
				'title'=>'',	
				),
			1=>array(
				'title'=>'11'
				)
			);
	function my_filter_props(&$props){
		foreach($props as $key=>$value){
			if(isset($value['title']) && $value['title'] == false){
				echo 11;
					unset($props[$key]);
				}
			}
	}
	my_filter_props($arr);
	print_r($arr);

