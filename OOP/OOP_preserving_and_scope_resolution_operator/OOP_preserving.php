<?php
//this will give classes here to Human Class
require_once "OOP_human_inheritance.php";

//PRESERVING we can overwrite an existing property or method in our inherited class, IF we want to keep the existing method and add something additional to it. We can use the scope resolution operator (::) to call the function from our parent class within the class we are overwriting.

class Wizard extends Human{
    public function __construct(){
        parent::__construct();
        $this->clan = "Wizard";
        $this->strength = 5;
        $this->intelligence = 40;
        $this->stealth = 5;
    }
    public function heal(){
        $this->health += 10;
    }
    public function trashTalk(){
        echo "Happiness can be found even in the darkest of times";
    }
    public function attack($human){
    	//The scope resolution operator allows us to refer to our parent class to call a method from there directly. We can refer to any of the parent methods or properties by specifying the keyword parent followed by two colons (::) and the name of the property or method that you want to refer to from the parent class.
        parent::attack($human);
        $this->heal();
    }
}


class Ninja extends Human{
    public function steal(){
        $this->stealth += 5;
    }
    public function trashTalk(){
        echo "Now you see me...";
    }
    public function attack($human){
    	//The scope resolution operator allows us to refer to our parent class to call a method from there directly. We can refer to any of the parent methods or properties by specifying the keyword parent followed by two colons (::) and the name of the property or method that you want to refer to from the parent class.
        parent::attack($human);
        $this->steal();
    }
}


class Samurai extends Human{
    public function sacrifice(){
        $this->health -= 5;
        $this->strength += 10;
    }
    public function trashTalk(){
        echo "The flower that blooms in adversity is the most beautiful of all";
    }
    public function attack($human){
    	//The scope resolution operator allows us to refer to our parent class to call a method from there directly. We can refer to any of the parent methods or properties by specifying the keyword parent followed by two colons (::) and the name of the property or method that you want to refer to from the parent class.
        parent::attack($human);
        $this->sacrifice();
    }
}



$ron = new Wizard();
$sasuke = new Ninja();
$kenshin = new Samurai();

// all three instances have the method trashTalk which was declared in the Human blueprint which 
// all three of the subclasses extends. However, each subclass overwrote the previous implementation
$ron->trashTalk();
$sasuke->trashTalk();
$kenshin->trashTalk();