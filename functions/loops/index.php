<?php
/**
 * Created by PhpStorm.
 * User: noel
 * Date: 3/02/18
 * Time: 16:34
 */

//for ($i = 0; $i <= 10; $i++) {
//    echo $i . '<br>';
//}

//$i = 1;
//while ($i <= 10) {
//    echo $i . '<br>';
//    $i++;
//}

//$i = 1;
//do {
//    echo $i . '<br>';
//    $i++;
//} while ($i <= 10);

$names = ['Esnor', 'Noel', 'Enrique'];
//foreach ($names as $name) {
foreach ($names as $key => $name) {
    echo $key . ' - ' . $name . '<br>';
}