<?php
	$str = 'http://www.baidu.com/fangyuan/ss-dyzfy13-dl/lf/from=1';
	if(@ereg('/fangyuan/(.*dyzfy13.*)/',$str)){
		echo 1;
	}else{
		echo 2;
	}
