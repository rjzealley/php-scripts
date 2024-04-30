<?php
/* missing-number.php
Find the Missing Number: Given an array containing n distinct numbers 
taken from 0, 1, 2,...,1n, find the missing number. 
*/

// String to reverse
$numbers = [1,2,3,4,5,7,8,9,10];

// Pass 1
$res = missingNumber($numbers);
if ($res) {
	printf("Missing number is %g\n", $res);
} else {
	printf("There are no missing numbers.");
}


/* missingNumber($nos)
$nos - array of numbers with one missing
Returns $m (int)
*/ 
function missingNumber($nos) {
	// Store length of string for conveience
	$m = false;
	$first = $nos[0];
	for ($i = $first; $i < $first + count($nos); $i++) {
		//debug
		printf("%g:%g\n",$nos[$i - $first], $i);
    	// check array against index 
    	if ($nos[$i - $first] !== $i) {
    		$m = $i;
    		break;
    	}
	}
	
	return $m;
}
