<?php

/*

String - Series of characters sorrounded by quotes "" or ''

Integer - Whole numbers - positive or negative

Float - Decimal number

Boolean - true of false

Array - Special varibale, wich can hold more than on value

Object - Created from a class

NULL - Empty variable

Resource - Special variable that holds a resource


- Must be prefixed with $ 
- Starts with _ or a letter
- Can only contain alhpa-numeric characters and underscores (A-z, 0-9, and _ )
- PHP is case in sensitive ($name != $NAME) 

*/

$name = 'Wilson'; // String

$age = 29; // Integer

$has_kids = false; // Boolean

$cash_on_hands = 20.75; // Float

echo $has_kids; // If flase, there is nothing to show on browser, if true it will show 1!

// var_dump($has_kids);

// var_dump($cash_on_hands);


// echo $name . ' is ' . $age . ' years old';

// OR

// echo "${name} is ${age} years old";

// echo '5' + '5';

$x = '5' + '5';

// var_dump($x);
// echo 10 - 5 . "<br>";
// echo 5 * 6 . "<br>";
// echo 10 / 2 . "<br>";
// echo 10 % 3 . "<br>";

// Constants -> Only use when you never gonna change the value!

// define('HOST', 'localhost');
// define('DB_NAME', 'dev_db');


// echo HOST;


?>