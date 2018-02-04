<?php
/**
 * Created by PhpStorm.
 * User: noel
 * Date: 4/02/18
 * Time: 16:25
 */

namespace Vehicles5;

abstract class VehicleBase
{
    //public $owner;
    protected $owner;

    public function __construct($ownerName)
    {
        $this->owner = $ownerName;
        echo 'constructor<br>';
    }


    public function move()
    {
        //abstract
        echo $this->startEngine();
        //
        echo '<br>';
        echo 'moving<br>';
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    //abstract
    public abstract function startEngine();
    //
}
