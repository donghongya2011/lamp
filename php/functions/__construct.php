<?php
	class foo {
		function __construct(){
			echo 11;
		}

		public static function say(){
			echo 22;
		}
	}

	$obj = new foo;
	$obj::say();
