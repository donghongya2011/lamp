<?php
/**
 * Created by PhpStorm.
 * User: jackdong
 * Date: 14-11-4
 * Time: 下午2:22
 */

$arr = array('D38','D99','D30');
$var = array(
    array("id"=>'D99','proimg_d'=>'url2'),
    array("id"=>'D30','proimg_d'=>'url3'),
    array("id"=>'D38','proimg_d'=>'url1'),
);

$result = array();

for($j=0;$j<5;++$j){
   $result[$j]['proimg_d'] = get_url($arr[$j],$var);
}
var_dump($result);
function get_url($id,$var){
    foreach($var as $v){
        if($v['id'] == $id){
            return $v['proimg_d'];
            break;
        }
    }
}
