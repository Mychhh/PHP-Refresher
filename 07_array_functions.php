<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'orange', 'pear'];

// Get array length
// echo count($fruits);

// Search array
// var_dump(in_array('apple', $fruits));

// Adds item to last index of an array
$fruits[] = 'grape';

// Adds item to last index of an array using push
array_push($fruits, 'mango', 'raspberry');

// Adds item to first index of an array
array_unshift($fruits, 'kiwi');

// Remove from array
array_pop($fruits); // Removes last
array_shift($fruits); // Removes first
// Remove specific element and the index
// unset($fruits[2]);
// Split into chunks of 2
$chunkedArray = array_chunk($fruits, 2);
// var_dump($chunkedArray);

// print_r($chunkedArray);

// Concatenate arrays
// $arr1 = [1, 2, 3];
// $arr2 = [4, 5, 6];
// $arr3 = array_merge($arr1, $arr2);
// print_r($arr3);
// $arr4 = [...$arr1, ...$arr2]; // Use Spread
// print_r($arr4);

// Combine arrays (Keys & values)
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);
// print_r($c);

// Array of keys
$keys = array_keys($c);
// print_r($keys);

// Flip keys with values
$flipped = array_flip($c);
print_r($flipped);

// Create array of numbers with range()
$numbers = range(1, 20);

// Map through array and create a new one
// $newNumbers = array_map(function ($number) {
//   return "Number ${number}";
// }, $numbers);

// Filter array
// $lessThan10 = array_filter($numbers, fn($number) => $number < 10);

// Array Reduce
// "carry" holds the return value of the previous iteration
// $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
// var_dump($sum);