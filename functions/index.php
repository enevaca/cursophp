<?php
/**
 * Created by PhpStorm.
 * User: noel
 * Date: 3/02/18
 * Time: 15:48
 */

//function hello($name) {
//    echo 'Hello ' . $name;
//    echo '<br>';
//}
//
//hello('Esnor');
//hello('Roxana');

$x = 100;

function sum($a, $b) {
    $x = $a + $b;
    return $x;
}

$c = sum(1, 2);
var_dump($c);
var_dump($x);
