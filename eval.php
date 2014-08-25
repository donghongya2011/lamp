<?php
/**
 * Created by PhpStorm.
 * User: jackdong
 * Date: 14-8-15
 * Time: 下午5:47
 */

$string = 'beautiful';

$time = 'winter';

$str = 'This is a $string $time morning!';

echo $str.PHP_EOL;


eval("\$str = \"$str\";");
echo $str.PHP_EOL;
