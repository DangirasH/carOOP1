<?php

require 'Bicycle.php';
require 'car.php';

$bike = new Bicycle('blue');

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake() . '<br>';

$flandersGeo = new car('purple', 4, 'gas');
$canyonero = new car('red', 6, 'fuel');

echo $flandersGeo->forward() . ' (Flanders Geo)' . '<br>';
echo $canyonero->forward() . ' (Canyonero)' . '<br>';

echo 'Vitesse de la voiture flandersGeo: ' . $flandersGeo->getCurrentSpeed() . 'km' . '<br>';
echo 'Vitesse de la voiture canyonero: ' . $canyonero->getCurrentSpeed() . 'km' . '<br>';

echo $flandersGeo->brake() . '(flandersGeo)' . '<br>';
echo $canyonero->brake() . '(canyonero)' . '<br>';

echo 'Vitesse de la voiture flandersGeo: ' . $flandersGeo->getCurrentSpeed() . 'km' . '<br>';
echo 'Vitesse de la voiture canyonero: ' . $canyonero->getCurrentSpeed() . 'km' . '<br>';