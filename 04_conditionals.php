<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/
/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 20;

// if($age >=  18){
//   echo 'You can vote';
// }else{
//   echo 'You are too young to vote';
// }

$t = date("h");
// echo $t;
// if($t < 12){
//   echo 'Good Morning';
// }
// elseif($t < 17){
//   echo 'Good Afternoon';
// }
// else{
//   echo 'Good Evening';
// }

$posts = ['First Post', 'Second Post'];

// if(!empty($posts)){
//   foreach ($posts as &$post) {
//     echo $post . " - ";
//   }
// }else{
//   echo 'No Post';
// }

// ternary

// $firsPost = !empty($posts) ? $posts[0] : 'NO POSTS';

// echo $firsPost;

$favColor = 'pink';

// switch($favColor){
//   case 'red':
//     echo 'Your favorite color is red';
//     break;
//   case 'blue':
//     echo 'Your favorite color is blue';
//     break;
//   case 'green':
//     echo 'Your favorite color is green';
//     break;
//   default:
//     echo 'Your favorite color is not in the option';
// }

?>