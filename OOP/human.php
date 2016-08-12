<?php  

//names are camel case
class MyFirstClass{
	public $my_property = 'default value';
	public function get_my_property(){
		return $this->my_property;
	}
	 //whenever you find a function in a class it is called a method.
	public function set_my_property($value){
		$this->my_property = $value;
	}
}

$obj = new MyFirstClass(); //create an instance of the class

echo $obj->get_my_property().'<br>';


$obj2 = new MyFirstClass();
$obj2->set_my_property('object two');
echo $obj2->get_my_property().'<br>';
?>