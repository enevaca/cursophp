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

    public function __construct($owner)
    {
        $this->owner = $owner;
        echo 'Constructor<br>';

    }

    public function __destruct()
    {
        echo 'Destruct<br>';
    }

    public function move()
    {
        echo 'moving<br>';
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function setOwnser($owner)
    {
        $this->owner = $owner;
    }
}

echo 'Class Car<br>';

$car = new Car('Esnor');
$car2 = new Car('Roxana');
$car->move();

//$car->owner = 'Noel';
//echo 'Owner: ' . $car->owner;

//$car->setOwnser('Noel');
//$car2->setOwnser('Roxana');

echo 'Owner Car: ' . $car->getOwner();
echo '<br>';
echo 'Owner Car2: ' . $car2->getOwner();
echo '<br>';