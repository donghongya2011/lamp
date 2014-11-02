<?php
	$dir = new DirectoryIterator(dirname(__FILE__));
    var_dump($dir->getSize());
    var_dump($dir->isDir());
	var_dump($dir);
