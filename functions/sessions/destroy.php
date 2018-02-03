<?php
/**
 * Created by PhpStorm.
 * User: noel
 * Date: 3/02/18
 * Time: 17:13
 */

session_start();

unset($_SESSION['count']);

session_destroy();