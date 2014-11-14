<?php

    function is_mobile($num){
       $patten = '/1[3|5|7|8|][0-9]{9}/';
        if(preg_match($patten,$num)){
            return true;
        }else{
            return false;
        }
    }
var_dump(is_mobile('13345678901'));exit();
	$path = 'json_decode.php';
    $path = 'php错误抑制符.md';
	$file = fopen($path,'rw');
    echo sizeof($file);exit();
    $str = gettype($file);
    $arr = array(1,2,$file,'a','b');
    $result = say($arr);
    var_dump($result);


    function say($arr){
        foreach($arr as $k=>$v){
            if(!is_integer($v) && gettype($v)!='resource'){
                return $v;
            }
        }
    }
