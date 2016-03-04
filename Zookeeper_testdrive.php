<?php

//Composition section --> Animals

include_once 'autoload.php';




$animal = new Dynooooosor('Viz'); // I create animals
$animal2 = new Babouin('Luna');
$ship = new Ship('Mooore');



$myzookeeper = new Zookeeper(); //I create zookeeper


$myzookeeper->takecareoff($animal); //taking care of animals (adding them to the list)
$myzookeeper->takecareoff($animal2);
$myzookeeper->takecareoff($ship);


$myzookeeper->soundOff(); //call the sound to make sure they are there


$myzookeeper->feedTheAnimals();
$myzookeeper->feedTheAnimals();
$myzookeeper->feedTheAnimals();
$myzookeeper->feedTheAnimals();
$myzookeeper->feedTheAnimals();










//var_dump($myzookeeper);
//nice way to understand what is inside an object. This is for objects. Has id numbers



?>