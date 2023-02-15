<?php
/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for($i = 1; $i <= 5; $i++){
//     echo "Loop #" . $i . "<br>";
// }
 
/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/
$x = 1;

// while($x <= 5){
//     echo 'while loop #' . $x . '<br>';
//     $x++;
// }

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);
do...while loop will always execute the block of code once, even if the condition is false.
*/

// do {
//     echo "Number ".  $x . "<br>";
//     $x++;
// } while ($x <= 5);
  
/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// Loop through an array

// $numbers = [1, 2, 3, 4, 5];

// foreach ($numbers as $x) {
//   echo "Number:" . $x . "<br>";
// }

// $person = [
//     'first_name' => 'Brad',
//     'last_name' => 'Traversy',
//     'email' => 'brad@gmail.com',
// ];
  
//   // Get Keys
//   foreach ($person as $key => $val) {
//     echo "${key} - ${val} <br>";
//   }

$posts = ['First Post', 'Second Post', 'Third Post'];

for($iteration = 0; $iteration < count($posts); $iteration++){
    echo $posts[$iteration] . " <br> ";
}

$whileIteration = 0;

while($whileIteration < count($posts)){
    echo 'While iteration ' . $posts[$whileIteration] . '<br>';
    $whileIteration++;
}

foreach($posts as &$post){
    echo 'For each ' . $post . '<br>';
}


?>