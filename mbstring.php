<?php 
header('content-Type:text/html;charset=utf-8');
function substr_utf8($str, $start, $length = null) { 
return join("", 
array_slice( 
preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY), $start, $length) 
); 
} 
$str = "我是一个good男孩!"; 
echo substr_utf8($str, 2, 4); 