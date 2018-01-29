<?php
/**
 * Created by PhpStorm.
 * User: noel
 * Date: 29/01/18
 * Time: 16:12
 */

$v1 = 12;
//$v2 = 10;
$v2 = 10;

//$result = $v1 == $v2;
//$result = $v1 === $v2;
//$result = $v1 != $v2;
//$result = $v1 !== $v2;
$result = $v1 <=> $v2;
var_dump($result);