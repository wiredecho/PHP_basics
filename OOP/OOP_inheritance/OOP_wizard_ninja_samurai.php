<?php

//this will give classes here to Human Class
require_once "OOP_human_inheritance.php";

class Wizard extends Human{
    public function heal(){
        $this->health += 10;
    }
}

class Ninja extends Human{
    public function steal(){
        $this->stealth += 5;
    }
}

class Samurai extends Human{
    public function sacrifice(){
        $this->health -= 5;
        $this->strength += 10;
    }
}

// creating an instance of Wizard, Ninja and Samurai
$harry = new Wizard();
$rain = new Ninja();
$tom = new Samurai();

// all instances still have human properties because its class extends the Human class
echo $harry->health . "<br />";
echo $rain->health . "<br />";
echo $tom->health . "<br />";

// yet they are subclasses which mean they can extend the current functionality of Human class
// instances of the Wizard class can perform the heal method
$harry->heal() . "<br />";
echo $harry->health . "<br />";

// instances of the Ninja class can perform the steal method
$rain->steal() . "<br />";
echo $rain->stealth . "<br />";

// instances of the Samurai class can perform the sacrifice method
$tom->sacrifice() . "<br />";
echo $tom->health . "<br />";
echo $tom->strength . "<br />";