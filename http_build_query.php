<?php
		$data = array(
		'foo'=>'bar',
		'baz'=>'boom',
		'cow'=>'milk',
		'php'=>'hypertext processor',
		'a');
		echo http_build_query($data,'prefix_');
