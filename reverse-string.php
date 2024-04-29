<?php
/* reverse-string.php
Write a PHP function to reverse a string in-place or without using additional data 
*/

// String to reverse
$s = "Hello World!";

// Pass 1
reverseString($s);
printf("%s\n\n", $s);

// Pass 2
reverseString($s);
printf("%s\n", $s);

/* reverseString(&$str)
&$str - string to reverse - by reference
no return value
*/ 
function reverseString(&$str) {
	// Store length of string for conveience
	$len = strlen($str);
	
	for ($i = 0; $i < $len / 2; $i++) {
    	// Swap characters from beginning and end 
    	// using list to extract these 2 characters from the string
    	list($str[$i], $str[$len - $i - 1]) = array($str[$len - $i - 1], $str[$i]);
    	
    	// Show progress
    	printf(" -> %s\n", $str);
	}
}
