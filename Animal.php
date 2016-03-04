<?php

include_once 'autoload.php';

class Animal {

  //variables -- THINGS SHIPS KNOW 
  protected $name;
  protected $food_eaten = 0;
  protected $food_limit = 5;
  
  
  
  	public function  __construct($name, $foodunits, $food_limit){
  	
  		$this->name = $name;
  		$this->food_eaten = $foodunits;
  		$this->food_limit = $food_limit;
  	}
  	
  	
  		
  public function __toString() {
	
	$string = "name: {$this->name}\n";
	$string = $string . "Food Units: {$this->foodunits}\n";
	$string = $string . "Food Unit Limit: {$this->food_limit}\n";
	
	}
  
  //functions -- "methods" -- THINGS SHIPS DO 

	public function eat() {
		if ($this->food_eaten < $this->food_limit){
			echo "{$this->name} is eating now!\n";
			//{$this->name} tells php precisely what the variable is
			$this->food_eaten++;
			//takes wathever is in th bucket foodunits, and substract one.
			$space_left = $this->food_limit - $this->food_eaten;
			echo "I have  {$space_left}  left\n";
		} else {
			echo "Sorry! No place for food left!\n";
		}
	}	
	
	
	/*public function speak() {
		echo "I am a mammal whose name is " . $this->name . "\n"	;
	
	}*/
	
	public function report() {
		echo "Hello! My name is " .	$this->name . "\n";
	}

	public function speak(){
 		echo "I am an " . __CLASS__ . " whose name is {$this->name} . \n";
 	}
 	
 	
	



	
	
}


?>