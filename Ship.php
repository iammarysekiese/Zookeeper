<?php

/*all of templates for codes are going to be capital letters (Ship.php); I never use capital letters
	Visibility:
		public => client can see, access, assign, etc.
		private => clients and child classes cannot even see this stuff
		protected => private, but inheritable
Ship has a built in report method for all the ships
*/


//Ships as a class are divided in two

class Ship {

  //variables -- THINGS SHIPS KNOW 
  protected $name;
  protected $ammo = 3;
  protected $ammo_limit = 10;
  
  
  
  	public function  __construct($new_name = 'I HAVE NO NAME'){
  	/*there are some special ones for classes (names that begins with two underscores __construct())
  	$new_name (local variable) exists only within this function. It is a local name. Temporary variable that 
  	exists only in the scope of this function. I need to copy it into $this->name (longer term variable)*/
	$this->name = $new_name; //copy temporary variable into long term variable
  	
  	}
  
  //functions -- "methods" -- THINGS SHIPS DO 

	public function fire() {
		if ($this->ammo > 0){
		echo "{$this->name} is firing now!\n";
		//{$this->name} tells php precisely what the variable is
		$this->ammo--;
		//takes wathever is in th bucket ammo, and substract one.
		echo "I have {$this->ammo} rounds left\n";
		} else {
				"sorry! No ammo left!\n";
		}
	}	


	public function report() {
		echo "Hello! My name is " .	$this->name . "\n";
		}



/*****************************************************************************************
*								
*							 This is called 'setter'
*
*****************************************************************************************/	


	
		public function setAmmoAmount($amount = 0) {
		$this->ammo = $this->ammo + $amount;
		if ($this->ammo > $this ->ammo_limit)
		$this->ammo=$this->ammo_limit;
		echo "Realoaded! Now carrying {$this->ammo} rounds\n";

		}
/*****************************************************************************************
*								
*							 This is called a 'getter'
*
*****************************************************************************************/	

	public function getAmmoAmount() {
		return $this->ammo;
		}

}


		
?>


