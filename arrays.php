<?php


$fruit = array("apple", "Bananas", "mangoes");
//short version short syntax
$laptops = ["Toshiba", "Acer", "hp", "Lenovo"];
//accessing elements in the array

// echo $fruit[2];
// echo $laptops[3];

//Adding elements to an array
//method 1 - adds to the very end 
$fruit[] = "Pineapples";
var_dump($fruit);
//method 2 array_push(array-name , "");
array_push($fruit , "Coconut");
var_dump($fruit);