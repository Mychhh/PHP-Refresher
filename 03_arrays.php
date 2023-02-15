<?php
/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/

$numbers = [1, 44, 55, 22];
$fruits = array('apple', 'orange', 'pear');

// print_r($numbers);
// var_dump($fruits);

// Associative array
$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

// echo $hex['blue'];
$person = [
    'first_name' => 'Michael',
    'last_name' => 'Sheesh',
    'email' => 'Michael@email.com'
];

//  echo $person['first_name'];

$people = [
    [
        'first_name' => 'Michael',
        'last_name' => 'Sheesh',
        'email' => 'Michael@email.com'
    ],
    [
        'first_name' => 'Chael',
        'last_name' => 'Sheesh',
        'email' => 'Chael@email.com'
    ],
    [
        'first_name' => 'Mych',
        'last_name' => 'Sheesh',
        'email' => 'Mych@email.com'
    ],
];

// var_dump($people[0]['last_name']);
// var_dump(json_encode($people));

?>