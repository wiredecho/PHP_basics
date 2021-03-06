<?php  
// One thing to keep in mind is notice that each method has a return this.  "return this" simply returns the objects, so it is needed for chaining.
// from a previous Bike example in OOP (OOP_bike_example.php)
class Bike
{
	// we can put variables with the same accessibility in one line
	public $price, $max_speed, $miles;

	// __construct function or 'class constructors' executes when you create an instance of its class
	// it can also accept parameters in which you can put values into when you create an instance of its class
	public function __construct($price, $max_speed){
		$this->price = $price;
		$this->max_speed = $max_speed;
		$this->miles = 0;
	}

	// displays class attribute's value/info
	public function displayInfo(){
		echo "<br />Price: " . $this->price.
			"<br />Max Speed: " . $this->max_speed.
			"<br />Miles: " . $this->miles ."<br />";
	}

	// adds the miles by 10
	public function drive(){
		echo "<br />Driving!";
		$this->miles = $this->miles + 10;

		// we need to add "return $this" to allow chaining
		return $this;
	}

	// subtracts the miles by 5
	public function reverse(){
		echo "<br />Reversing!";
		$this->miles = $this->miles - 5;

		// prevent negative miles
		if($this->miles < 0){
			// if miles is less than 0, we set it back to 0
			$this->miles = 0;
		}
		// we need to add "return $this" to allow chaining
		return $this;
	}
}

// Instantiating 3 new bikes
$bike1 = new Bike(200, "25mph");
// create first instance of the class Bike and run functions
$bike1 = new Bike(200, '60 mph');
$bike1->drive()->drive()->drive()->reverse()->displayInfo();

// create second instance of the class Bike and run functions
$bike2 = new Bike(300, '80 mph');
$bike2->drive()->drive()->reverse()->reverse()->displayInfo();

// create third instance of the class Bike and run functions
$bike3 = new Bike(500, '100 mph');
$bike3->reverse()->reverse()->reverse()->displayInfo();


?>
