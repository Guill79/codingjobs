<?php

// 1. IF Syntax

$a = 5;

if ($a == 6) {
    echo 'Equal';
} else {
    echo 'Not equal';
}

//2. Compare operators

$var1 = 2;
$var2 = '2';

// Contains the same value
if($var1 == $var2)

// Contains the same value AND of same type
if($var1 === $var2)

// Not equal / Not same value
if($var1 != $var2)

// Different OR not same type
if($var1 !== $var2)

// Greater/Lower than :
if($var1 < $var2)
if($var1 <= $var2)
if($var1 > $var2)
if($var1 >= $var2)

// 3. Logical Operators

// AND &&
if($var1 == 5 AND $var2 == 3)
if($var1 == 5 && $var2 == 3)

// OR ||
if($var1 == 5 OR $var2 == 3)
if($var1 == 5 || $var2 == 3)

?>