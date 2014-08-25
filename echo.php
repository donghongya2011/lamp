<?php
	print_r($_SERVER);
?>
<? 
	echo '~~';
?>
<?php
	exit();
?>
	$arr = array('a'=>'aaaa');
	define('a','a');
	//	echo "this is $arr[a]";
	function say(){
		return 'abc';
	}
	$abc = 'xx';
	//echo "The word is {${say()}}";
	$str = 'hello world!';
	//echo $str[10];
	echo $_SERVER['REQUEST_TIME'].PHP_EOL;
	echo time();
	
