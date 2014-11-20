<?php
$a='/fangyuan/qingpu-dyzfy13/';
var_dump(strpos($a,'dyzfy1x3'));

exit();
//	$str = 'display/anjuke/932423321283fa414886b9cf7d25d5c7_1_554x737x0x1';
//	var_dump(strpos($str,'anjuke'));
	$a = 'D1';
//	var_dump(strpos($a,"D"));exit();
	if(strpos($a,'D')>=0){
		$a = '1';
	}else{
		$a = 'D1';
	}
	echo $a;
