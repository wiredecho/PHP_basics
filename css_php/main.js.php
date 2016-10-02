$(document).ready(function(){
	var first_number= <?= rand(1,100); ?>;
	var second_number= <?= rand(1,100); ?>;

	alert(first_number + "*" + second_number + " = " + (first_number * second_number));
})