<?php


// Array Functions IMPORTANT!



$fruits = [
    'apple',
    'orange',
    'pear',
];

// Get length

// echo count($fruits);


//Search array

// var_dump(in_array('apple', $fruits));

// Add to array

$fruits[] = "grape";


array_push($fruits, 'blueberry', 'strawberry'); // add at the end


array_unshift($fruits, 'mango'); // add at the begin



// Remove from array

array_pop($fruits); // removes the last one


array_shift($fruits); // removes the first one

// unset($fruits[2]); // Remove a specific item;


// Split into 2 chunks


// $chunked_array = array_chunk($fruits, 2);


// print_r($chunked_array);

 

// Merge arrays

$arr1 = [1,2,3];
$arr2 = [4,5,6];


$arr3 = array_merge($arr1, $arr2); //using specific function
// or
$arr4 = [...$arr1, ...$arr2]; // using spread operator, like JavaScript



// print_r($arr3);
// print_r($arr4);

// Combine Arrays

$a = ['green', 'red', 'yeloow'];

$b =['avacado', 'apple', 'banana'];

    // Create a multidimensional array
$c = array_combine($a, $b);

// print_r($c);


$key = array_keys($c);

// print_r($key);

// Flip array

// keys turns values, and values turns keys

$flipped = array_flip($c);

// print_r($flipped);


// Create an array with a range of numbers

$numbers = range(1, 20);

// print_r($numbers);

$newNumbers = array_map(function($number) {
    return "Number $number";
}, $numbers);

// print_r($newNumbers);

// Filter an array

$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);


// print_r($lessThan10);

// Reduce!!

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

echo $sum;









