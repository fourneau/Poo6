<?php

require_once 'vehicle.php';
require_once 'LightableInterface.php';

// Bicycle.php

class Bicycle extends Vehicle implements LightableInterface
{

    //challenge interface


    public function switchOn(): bool
    {
        if ($this->currentSpeed < 10) {
            return false;
        }
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}