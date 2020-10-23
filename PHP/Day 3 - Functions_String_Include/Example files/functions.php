<?php

// Declare a function
function hello_world() {
    echo 'Hello, World<br>';
}

// Call a function
hello_world();

// Function with arguments :
function greetings($msg = 'hey boy') {
    echo 'Hello, this is your message : ' . $msg . '<br>';
}

$message = 'my messsaaaaaaage';
greetings('my messssaaaaaaaage');
greetings($message);
greetings();

// With multiple arguments
// function manyArguments($arg1, $arg2 = 'dadada')

echo '<hr>';

// Return value
function multiply($a) {
    return 2*$a;
    // this will never be executed :
    echo 'hello';
}

// You can echo or save the result :
echo multiply(5) . '<br>';
$result = multiply(5);

// Scope : visibility of variables

// $x to access by value OR &$x to access by reference
// $x to create a copy OR &$x to access the original variable
function displayMessage($message, &$x) {
    $x += 10;
    return $message . ' : ' . $x;
}

$myNumber = 5;
echo '<br>' . ' BEFORE -- Number outside function : ' . $myNumber . '<br>';
echo displayMessage('Number inside function : ', $myNumber);
echo '<br>' . ' AFTER -- Number outside function : ' . $myNumber;