<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    protected string $energy;

    protected int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
        }
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function setHasCarBrake($hasCarBrake)
    {
        $this->hasCarBrake = $hasCarBrake;

        return $this;
    }

    public function start()
    {
        if($this->Brake()) {
            throw new Exception("Car stop");
        }
        else return parent::forward();
    }
    public function switchOn():bool
    {
        return true;
    }
    public function switchOff():bool
    {
        return false;
    }
}