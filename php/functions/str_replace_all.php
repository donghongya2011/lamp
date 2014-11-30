<?php
$arr = array(1,2,3);
$str ='1a2b3c';
foreach($arr as $v){
	$str = str_replace($v,'*',$str);
}
echo $str;
