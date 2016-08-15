<?php

//Please note that running this code is a demostration of how private methods are not visible to other extended classes.  expect this error Fatal error: Uncaught Error: Cannot access private property MyBaseClass::$base_property in /Users/apple/Desktop/LAMP_2016/PHP/OOP/OOP_private_methods.php:36 Stack trace: #0 {main} thrown in /Users/apple/Desktop/LAMP_2016/PHP/OOP/OOP_private_methods.php on line 36


class MyBaseClass
{
    public function __construct($instance){
        echo "I am called for object: " . $instance;
    }

    // Note: in the previous example, this was marked 'protected'
    private $base_property = 0;

    // Note: in the previous example, this was marked 'public'
    protected function set_the_property($prop_value){
        $this->base_property = $prop_value;          //  I can always see/set my own attributes
    }
}

class MyChildClass extends MyBaseClass{
    public function directly_set_property($prop_value){
        // 'private' makes MyBaseClass::base_property unavailable, even to child classes.
        $this->base_property = $prop_value;         // This causes an error -- cannot access prop_value 
    }
    public function child_sets_property($prop_value){
        // 'protected' makes MyBaseClass::set_the_property() visible to child classes like this one.
        $this->set_the_property($prop_value);      // This will work well. 
    }
}



$child = new MyChildClass('child'); 
$base = new MyBaseClass('base');

// 'private' makes $base_property unavailable outside the class itself
$child->base_property = 68;                         // Nope! This will cause an error
$base->base_property = 86;                          // Nope! This will cause an error

// $base_property is even inaccessible by child classes.
$child->directly_set_property(68);                // Nope! We can call the method, but it then fails

// 'protected' makes set_the_property() invisible outside itself and child classes.
$child->set_the_property(68);                      // Nope! We can't access that method from out here.
$base->set_the_property(86);                       // Nope! We can't access that method from out here. 

// from inside the child_sets_property() public method, we can access protected attributes
$child->child_sets_property(42);                   // YES!  This works wonderfully well.

// and remember that parent objects don't "reverse-inherit" the methods/members of their children!
$base->directly_set_property(86);                  // Nope! MyBaseClass contains no method with that name
$base->child_sets_property(86);                    // Fail! $base doesn't even have a child_sets_property()!
