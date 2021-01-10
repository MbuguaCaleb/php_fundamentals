<?php

// What is a variable
/**
 * It is  a container of information
 */
// Variable types
/**
 * In php variables do not have types
 * It is loosely  typed language and varibles change value depending on the type assigned 
 * to them(Dynamically Typed)
 * 
 */


/*Types of Variables 
  are: String
       Integer
       Float/Double
       Boolean
       Null
       Array
       Object
       Resource
  */

// Declare variables
$name = 'Caleb';
$age = 28;
$isMale = false;
$height = 1.85;
$salary = null;

// Print the variables. Explain what is concatenation

//concat name and br
// echo $name . '<br>';

//when ever we print a boolean true is converted into 1 and false is converted into an empty string.
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

//null is convereted to an empty string as well when we print them on the screen.

// Print types of the variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

// Print the whole variable

//very useful for debugging and prints what  the whole variable contains
//its very  useful when working with large values like arrays.
var_dump($name, $age, $isMale, $salary, $height);

// Change the value of the variable
$name = null;

// Print type of the variable
echo gettype($name) . '<br>';

// Variable checking functions
is_string($name); //false
is_int($age); //true
is_bool($isMale); //true
is_double($height); //true

// Check if variable is defined
isset($name); //true
isset($javaScript); //false

//isset returns false in a non declared variable

// Constants
//Once declared its value cannot change
define('PI', 3.146);

//Are printed without dollar sign
echo PI . '<br>';

// Using PHP built-in constants
echo SORT_ASC . '<br>';
echo PHP_INT_MAX . '<br>';
