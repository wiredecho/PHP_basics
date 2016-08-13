<?php

class Car
{

	public $price, $speed, $fuel, $mileage, $tax;

	// __construct function or 'class constructors' executes when you create an instance of its class, it can also accept parameters in which you can put values into when you create an instance of its class
	public function __construct($price, $speed, $fuel, $mileage)
	{
		$this->price = $price;
		$this->speed = $speed;
		$this->fuel = $fuel;
		$this->mileage = $mileage;

		$this->tax = ($this->price > 10000) ? "0.15":"0.12";

		// call display_all method
		$this->display_all();
	}

	// Iterate through array and display values based on keys.
	public function display_all()
	{
		foreach ($this as $key => $value) {
			echo $key . ": " . $value . "<br />";
		}
	}

}

// Car Instances
$car1 = new Car(15000, "35mph", "Full", "25mpg");
$car2 = new Car(10000, "55mph", "Half Full", "35mpg");
$car3 = new Car(6000, "55mph", "Half Full", "35mpg");
$car4 = new Car(20000, "65mph", "Empty", "55mpg");
$car5 = new Car(30000, "85mph", "Half Full", "85mpg");