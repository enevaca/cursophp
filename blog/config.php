<?php
/**
 * Created by PhpStorm.
 * User: noel
 * Date: 4/02/18
 * Time: 17:16
 */

$dbHost = 'localhost';
$dbName = 'cursophp';
$dbUser = 'root';
$dbPass = '';

try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo $e->getMessage();
}