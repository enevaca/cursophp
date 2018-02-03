<?php
/**
 * Created by PhpStorm.
 * User: noel
 * Date: 3/02/18
 * Time: 17:53
 */

class Car
{
    //private $owner;
    private $owner;

    public function move() {
        echo 'moving<br>';
    }

    public function getOwner() {
        return $this->owner;
    }

    public function setOwnser($owner) {
        $this->owner = $owner;
    }
}

echo 'Class Car<br>';

$car = new Car();
$car->move();

//$car->owner = 'Noel';
//echo 'Owner: ' . $car->owner;

$car->setOwnser('Noel');

$car2 = new Car();
$car2->setOwnser('Roxana');

echo 'Owner Car: ' . $car->getOwner();
echo '<br>';
echo 'Owner Car2: ' . $car2->getOwner();