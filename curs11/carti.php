<?php

include_once('autoload.php');

$animal = new Animal();
$carte = new Carte('Poezii' , 'George Cosbuc');
$carte3 = new Carte('Roman' , 'Mihail Sadoveanu');

echo $carte;

$carte2 = clone $carte;

echo $carte2;