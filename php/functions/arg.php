<?php
	$pre = 'test_';
	$a = 0;
	$var1 = 'tmp_'.$a;
	$$var1 = 1;
	var_dump($$var1);
