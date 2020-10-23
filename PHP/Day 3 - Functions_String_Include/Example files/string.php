<?php

// Usefull functions to use on Strings
$string = 'Here, take a beer';

// Make the whole string lowercase :
echo strtolower($string) . '<br>';

// Make the whole string uppercase :
echo strtoupper($string) . '<br>';

// First letter uppercase :
echo ucfirst($string) . '<br>';

// First letter of each word uppercase :
echo ucwords($string) . '<br>';

// Find the position of a sub-string in a string
echo strpos($string, ',') . '<br>';
echo strpos($string, 'take') . '<br>';

// Retrieve only one part of a string(sub-string)
$myString = 'Here, take another beer';
echo substr($myString, 19) . '<br>';
echo substr($myString, 11, 7) . '<br>';
echo substr($myString, -5) . '<br>';

// Replace all occurences of a word in a string
echo str_replace('beer', 'coca-cola', $myString) . '<br>';

// Remove occurence on left and right side of a string
// By default, white spaces
$myString = '////Here, take another beer/';
echo trim($myString) . '<br>';
echo trim($myString, '/') . '<br>';

// Convert a string into an array
$string = 'Hello Simon I hope you are okay';
$myArray = explode(' ', $string);

echo '<pre>';
var_dump($myArray);
echo '</pre>';


// Transform an array into a string
$newString = implode('//', $myArray);
echo $newString;