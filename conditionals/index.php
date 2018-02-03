<?php
/**
 * Created by PhpStorm.
 * User: noel
 * Date: 3/02/18
 * Time: 16:17
 */

$color = 'green';

//if($color == 'black') {
//    echo 'Color is Black';
//} else if ($color == 'wite') {
//    echo 'Color is not White';
//} else {
//    echo 'Color...';
//}

switch ($color) {
    case 'black':
        echo 'Color is Black';
        break;
    case 'white':
        echo 'Color is White';
        break;
    default:
        echo 'Color ...';
        break;
}