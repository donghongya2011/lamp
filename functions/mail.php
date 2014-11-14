<?php
	$to = 'donghongya2011@163.com';
	$subject = 'subject';
	$msg = 'msg001';
	$from = '071006201@163.com';
	$headers = "From:$from";
	mail($to,$subject,$msg,$from,$headers);
//	mail($to,$subject,$msg,$headers);
	echo 'mail sent!';
