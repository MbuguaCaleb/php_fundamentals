<?php

// Create array

// //arrays are like varibales that may contain more than one value
// $fruits = ["Banana", "Apple", "Orange"];

// //declaration method 2
// //$fruits = array();

// // Print the whole array
// //arrays always start with index 0

// //pre makes the outputted Array readble
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Get element by index

// echo $fruits[1] . '<br>';

// // Set element by index
// //replaces the array element at index zero with Peach
// $fruits[0] = 'Peach';

// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Check if array has element at index 2

// isset($fruits[2]);
// //returns true or false based on of an array has been set at that Position
// var_dump(isset($fruits[3]));

// // Append element

// $fruits[] = 'Banana';
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Print the length of the array

// echo count($fruits) . '<br>';

// // Add element at the end of the array
// //this is another method of appending to the array

// array_push($fruits, 'Mango');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';


// // Remove element from the end of the array

// echo array_pop($fruits);

// //the above removes the last element from the Array.
// //elements in the Array become less by One
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';


// // Add element at the beginning of the array

// array_unshift($fruits, 'Ovacado');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Remove element from the beginning of the array
// array_shift($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Split the string into an array
// //i use explode with the delimeter which i want to split the 
// //string

// $string = "Fish,Chips,Chicken";
// echo '<pre>';
// var_dump(explode(",", $string));
// echo '</pre>';

// // Combine array elements into string
// //combines the elements of array into a string with & as glue.

// echo implode("&", $fruits);

// // Check if element exist in the array

// echo '<pre>';
// var_dump(in_array('Apple', $fruits));
// echo '</pre>';

// // Search element index in the array
// //it returns the index of the element being searched in the Array
// echo '<pre>';
// var_dump(array_search('Banana', $fruits));
// echo '</pre>';

// // Merge two arrays
// $vegatables = ["Potato", 'Cucumber'];

// echo '<pre>';
// var_dump(array_merge($fruits, $vegatables));

// //Arrays may also be mergred via the Spread Operator
// var_dump([...$fruits, ...$vegatables]);
// echo '</pre>';


// // Sorting of array (Reverse order also)

// sort($fruits);

// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// //sort in reverse order
// rsort($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

//sorts the array alphabetically.

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================
//Contains Key Value Pairs

// Create an associative array

$person = [
    'name' => 'Caleb',
    'surname' => 'Karanja',
    'age' => 25,
    'hobbies' => ['Bible Listening', 'Playing Guitar']
];

//Ways of Printing the Array

//1.print_r($array)

//print_r($person);

//2.Var_dump
echo '<pre>';
var_dump($person);
echo '</pre>';

// Get element by key
echo $person['name'] . '<br>';

// Set element by key

//adds channe; as a key value in this Array
$person['channel'] = 'Travesy Media';

echo '<pre>';
var_dump($person);
echo '</pre>';


// Null coalescing assignment operator. Since PHP 7.4

//old way of assigning
// if (!isset($person['address'])) {
//     $person['address'] = 'unknown';
// }

//new way
//checks id the key has been set
//if it has retins previous lest sets unknown
//$person['address'] = $person['address'] ?? 'unknown';

//making above simpler
$person['address'] ??= 'unknown';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Check if array has specific key

echo '<pre>';
var_dump(isset($person['Surname']));
echo '</pre>';

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys

ksort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';

//sorting assoc br value
asort($person);

echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays
$todos = [
    ['title' => 'Todo title 1', 'completed' => true],
    ['title' => 'Todo title 2', 'completed' => true],
];

echo '<pre>';
var_dump($todos);
echo '</pre>';

//Multidimensional array is most popular data fromat we may receive from a server.

