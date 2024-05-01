<?php
/* palindrome-check.php
Palindrome Check: Write a function to determine if a given string 
is a palindrome (reads the same forwards and backward).
*/

// Word
$word = "Rotavator";

// Test
printf("%s is %sa palindrome.", $word, (!checkPalindrome(strtolower($word))) ? "not " : "");

/* checkPalindrome($s)
$s - string to check 
returns True if is a palindrom
*/ 
function checkPalindrome($s) {
	$half = intval(strlen($s) / 2);
	return (substr($s, 0, $half) === strrev(substr($s, 0 - $half)));
}

