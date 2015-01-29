<?php
	$handle_name = 'php://output';
	$handle = fopen($handle_name,'w');
	fwrite($handle,'sss');
