<!-- Construct
PHP has a number of reserved method names that start with two underscores, known as magic methods, that will be called in certain circumstances within a class. The most common one is the __construct() method. The __construct() is a special function within a class that gets called for every new instance of a class. We didn't have to define the __construct() method in our previous implementations of our class. We only have to implement this method if we want to do some kind of custom set-up before the instantiation of an object.  -->
<?php
class MyFirstClass{
	public $property1 = "I am PROPERTY1".'<br>';
	public function __construct($instance){
		echo "I am getting called for object: ".$instance.'<br>';
	}
	public function set_property1($property1){
		$this->property1 = $property1;
	}
	public function get_property1(){
		return $this->property1;
	}
}

$obj1 = new MyFirstClass('instance one');
//this will print 'I am getting called for object: instance one'

$obj2 = new MyFirstClass('instance two');
//this will print 'I am getting called for object: instance one'

echo $obj1->get_property1();
echo $obj2->get_property1();
$obj1->set_property1('New value for property1 for the first instance');
$obj2->set_property1('New value for property1 for the second instance');
echo $obj1->get_property1();
echo $obj2->get_property1();