<?php
/* fizz-buzz.php
FizzBuzz: Print numbers from 1 to n, 
but replace multiples of 3 with "Fizz" 
and multiples of 5 with “Buzz,” 
and multiples of both with “FizzBuzz."
*/

// Array to process
$numbers = [1,2,3,4,5,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25];

// Test
print(doFizzBuzz($numbers));

/* doFizzBuzz($nos)
$nos - array of numbers 
prints result
returns nothing
*/ 
function doFizzBuzz($nos) {
	for ($i = 0; $i < count($nos); $i++) {
		print(calcFizzBuzz($nos[$i]));
	}
}

/* calcFizzBuzz($x)
$x integer to process
Create a string based on the fizzbuzz rule above
returns result string
*/  
function calcFizzBuzz($x) {
	$fizz = !($x % 3);
	$buzz = !($x % 5);
	
	return ((!$fizz && !$buzz) ? strval($x) : "") 
			. (($fizz) ? "Fizz" : "")
			. (($buzz) ? "Buzz" : "");
}

