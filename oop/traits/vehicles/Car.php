<?php
/**
 * Created by PhpStorm.
 * User: noel
 * Date: 4/02/18
 * Time: 16:25
 */

namespace Vehicles5;

require_once 'VehicleBase.php';
require_once 'GPSTraits.php';

class Car extends VehicleBase implements \Serializable {

    use GPSTraits;

    public function move()
    {
        //abstract
        echo $this->startEngine();
        //
        echo '<br>';
        echo 'Car2: moving<br>';
    }

    //abstract
    public function startEngine()
    {
        return 'Car: start engine';
    }

    //interfaces
    public function serialize()
    {
        echo 'Serialize<br>';
        return $this->owner;
    }

    public function unserialize($serialized)
    {
        echo 'Unserialize<br>';
        $this->owner=$serialized;
    }
    //
}