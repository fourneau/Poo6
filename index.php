<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

//BICYCLE
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
$bicycle->setCurrentSpeed(15);

echo $bicycle->forward();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed()  . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake()."<br><br>";

$rockrider = new Bicycle('yellow', 1);

$tornado = new Bicycle('black', 1);

//CAR
$car = new Car('red', 5, 'electric');
$car->setCurrentSpeed(50);
$car->setEnergyLevel(75);

echo $car->start();
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed()  . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();

//TRUCK
$truck = new Truck('blue', 3, 'fuel', 100);
$truck->setCharge(50);
echo $truck->isFull();

//ABSTRACT
$a = new MotorWay ();
$a->addVehicle(new Car('red', 5, 'fuel'));
var_dump($a);

$b = new PedestrianWay ();
$b->addVehicle(new Bicycle ('red', 5));
var_dump($b);
