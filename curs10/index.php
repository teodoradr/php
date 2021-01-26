<?php 
//include_once('Car.php');
include_once('Carti.php');

// $masina = new Car();
// $masina2 = new Car();

// $masina->model = 'Logan';
// echo Car::$wheels;
// echo '<pre>';
// var_dump($masina);
// var_dump($masina2);

$carte = new Carti();
$carte2 = new Carti();

$carte->titlu ='Poezii';
$carte->autor ='Mihai Eminescu';
$carte->editura ='Polirom';
$carte->an_aparitie = 2007;
$carte->nr_pagini = 134;
$carte->pret = 20;
$carte->info(2021);

$carte2->titlu ='Marile sperante';
$carte2->autor ='Charles Dickens';
$carte2->editura ='Univers';
$carte2->an_aparitie = 2003;
$carte2->nr_pagini = 254;
$carte2->pret = 35;

$carte3 = clone $carte2;
$carte3->titlu='titlul de la carte 3';
echo '<br>';
$carte2->info();
echo '<br>';
$carte3->info();
echo "<pre>";
var_dump($carte);
echo '<br>';
var_dump($carte2);
echo '<br>';
var_dump($carte3);

$carte2->stopCitit();
echo '<br>';
$carte3->stopCitit();