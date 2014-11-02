<?php
	$str = 'http://sh.pmt-23472-site.zu.anjuke.test/fangyuan/fengxian/';
	if(preg_match_all('/fangyuan\/(.*?)/',$str,$arr)){
		var_dump($arr);
	}else{
		echo 2;
	}
