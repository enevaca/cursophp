<?php
/**
 * Created by PhpStorm.
 * User: noel
 * Date: 3/02/18
 * Time: 17:32
 */

//$var2 = 1;
//
////$var = function () {
//$var = function () use ($var2) {
//    echo 'This is a closure <br>';
//    echo 'Value: ' . $var2;
//};
//
//$var();
$x = 3;
$numbers = [1, 2, 3, 4, 5];

//$result = array_map(function ($n) use ($x) {
//    return $n * $x;
//}, $numbers);

$closure = function ($n) use ($x) {
    return $n * $x;
};

$x = 4;
$result = array_map($closure, $numbers);

var_dump($result);