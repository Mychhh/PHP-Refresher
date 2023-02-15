<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Michael'; // String
$age = 20;
$has_kids = true;
$cash_on_hand = 20.75;

// var_dump($has_kids);

//this is better
// echo $name . ' is ' . $age . ' years old'; 

//this is much better
// echo "${name} is ${age} years old";

$x = '5' + '5';

// var_dump($x);

// echo 10 - 5;
// echo 10 + 5;
// echo 10 / 6;
// echo 10 % 6;

// define('HOST', 'localhost');

// echo HOST;

?>