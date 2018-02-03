<?php
/**
 * Created by PhpStorm.
 * User: noel
 * Date: 3/02/18
 * Time: 17:07
 */

session_start();

$_SESSION['count']++;

echo '<p>Adding 1</p>';