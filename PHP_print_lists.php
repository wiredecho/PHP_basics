<?php


// print the elements in an array as a line item

$a = array(10,20,30," million dollars");
function print_lists($a){
	$result = "";
	foreach($a as $values){
		$result .="<li>" . $values . "</li>";
	}
	return $result;
}
echo "<ul>" . print_lists($a) . "</ul>";

?>