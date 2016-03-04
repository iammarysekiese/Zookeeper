<?php

//Composition section --> Animals

include_once 'autoload.php';

class Zookeeper {

	private $arr = array();
	
 		

	public function feedTheAnimals() {
	foreach ($this->arr as $value) {
	$value->eat();
		}
	
	}
	
	
	public function soundOff() {
		
		foreach ($this->arr as $value) {//animals in array are being called one by one as value
  			$value->speak(); //animal one by one are required to speak
  		}
		
  		//echo "As an " . __CLASS__ . " I, {$this->name}, will SoundOfffff. \n";
		//}
	}

	public function takecareoff(Animal $newAnimal){
		$this->arr[]= $newAnimal; //whatever is adding, to add at the end... getting $newAnimal and adding to $arr[]
	}
 
 

 
 } 	





  	
  	
  	
  	
    /*public function __toString() {
	
	$string = "name: {$this->name}\n";
	$string = $string . "Food : {$this->foodunits}\n";
	$string = $string . "Food Unit Limit: {$this->food_limit}\n";
	
	}*/


	/**
	 * @param int $food
     */

   

/* Animals
Write a Zookeeper class that has some animals. Give it a method called takeCareOf() that accepts 
an animal object as a parameter. It should add the animal object to an internal array.


Modify Zookeeper::takeCareOf() to use type hinting. Each animal object passed to 
Zookeeper should inherit from Animal.

 at will prevent unscrupulous clients from 
trying to get the Zookeeper to take care of other objects like Ships or SpaceAliens.†


Add a feedTheAnimals() method that loops through all the animals and calls their eat() methods.‡


Give Zookeeper a soundOff() method that loops through all its animals and calls their speak() methods.
*/


?>