<?php  



class Human{
	public $health;
	public $clan;
	public $strength=3;
	public $intelligence =3;
	public $stealth =3;
	public function __construct(){
		echo "I am alive";
		$this->health=100;
	}

	public function get_health(){
		return $this->health;
	}

	public function set_health($health){
		$this->health = $health;
	}
}
 $peter = new Human();
 $peter->set_health(80);
 $parker = new Human();

var_dump($peter);
?>