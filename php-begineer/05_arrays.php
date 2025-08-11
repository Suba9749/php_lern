<?php

// index array
// $fruits=["apple", "banana", "orange"];
// // print array
// echo $fruits[0] . "<br>";
// $fruits[3] = "grape"; // adding a new element
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

//mixed type array

// $mixedArray = ["apple", 10, 20.5, true, null, "banana"];
// echo '<pre>';
// var_dump($mixedArray);
// echo '</pre>';

// associative array

$user= [
 'name' => 'Subhankar',
 'age' => 25,
 'hobbies'=> ['conding', 'reading', 'gaming'],
];
echo $user['name'] . "<br>";
echo '<pre>';
var_dump($user);
echo '</pre>';