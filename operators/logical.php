<?php
/**
 * Created by PhpStorm.
 * User: noel
 * Date: 29/01/18
 * Time: 16:47
 */

$v1 = 1;
$v2 = 1;

$v3 = 2;
$v4 = 3;

$result1 = $v1 == $v2;
echo 'Result 1 <br>';
var_dump($result1);

echo '<br><br>';

$result2 = $v3 == $v4;
echo 'Result 2 <br>';
var_dump($result2);

//$result3 = $result1 && $result2;
$result3 = $result1 || $result2;
echo '<br><br>';
echo 'Result Final <br>';
var_dump($result3);

