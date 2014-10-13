<?php
	class foo {
		function __invoke($a){
			var_dump($a);
		}
	}
	$obj = new foo;
	$obj(123);
