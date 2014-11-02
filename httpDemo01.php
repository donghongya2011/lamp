<?php
    $url = 'http://www.baidu.com/';
    $html = file_get_contents('./__invoke.php',NULL,NULL,0,10);
    print_r($html);
    exit(0);
    print_r($http_response_header);
    $fp = fopen($url,'r');
    print_r(stream_get_meta_data($fp));
    fclose($fp);

