<?php

$y =  12;
                    // argument
function registerUser($email){
    echo $email . ' is registered';
}

            // parameter
// registerUser('Michael');

// Regular function
function sum($n1 = 1, $n2 = 4){
    return $n1 + $n2;
}

$sumNumber =  sum();
// echo $sumNumber;

// Anonymous Function
$subtract =  function($n1, $n2, $n3){
    return $n1 -  $n2 - $n3;
};

echo $subtract(1, 4, 3);


?>