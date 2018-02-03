<?php
/**
 * Created by PhpStorm.
 * User: noel
 * Date: 3/02/18
 * Time: 17:24
 */

$value = $_COOKIE['count'];
$value++;
setcookie('count', $value);

echo '<p>Adding 1</p>';