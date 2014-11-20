<?php
function getUrlProcessString($request_url) {
//    $pattern = '@/rent/sublessor/(?<channel>[a-z]+)/(?<func>[a-z]+)@';
    $pattern = '#/rent/sublessor/(?<a>[a-z]+)/(?<b>[a-z]+)#';
    $matches = array();
        preg_match($pattern, $request_url, $matches);
        return array(
        'channel' => $matches['a'],
        'func' => $matches['b']
       );
}

$str = '/rent/sublessor/photo/upload';
var_dump(getUrlProcessString($str));