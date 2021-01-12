<?php

// Declaring numbers

$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo ($a + $b) * $c . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';

//Modulus/remainder
echo $a % $b . '<br>';

// Assignment with math operators
// $a += $b;
// //same as $a=$a+$b
// echo $a . '<br>';

// $a -= $b;
// echo $a . '<br>';


// $a *= $b;
// echo $a . '<br>';


// $a /= $b;
// echo $a . '<br>';


// $a %= $b;
// echo $a . '<br>';

// Increment operator

//first the value of a is taken and increased by one
echo $a++ . '<br>';

echo $a . '<br>';
//first the value of a is printed then its increased.
echo ++$a . '<br>';


// Decrement operator

echo $a-- . '<br>';
echo --$a . '<br>';

// Number checking functions
var_dump(is_float(1.25)) . '<br>'; //true
is_double(1.25); //true
is_int(5); //true
is_numeric("3.45"); //true;
is_numeric("3g.45"); //false

// Conversion
//i do the conversion from one datatype to another by typecasting
$strNumber = '12.34';
$floatNumber = (float)$strNumber;
var_dump($floatNumber) . '<br>';
$integerNumber = (int)$strNumber;
var_dump($integerNumber) . '<br>';

//other ways
$floatNumberM2 = floatval($strNumber);
var_dump($floatNumberM2) . '<br>';

$intNumberM2 = intval($strNumber);
var_dump($intNumberM2) . '<br>';

// Number functions
echo "abs(-15)" . abs(-15) . '<br>';
echo "pow(2,3)" . pow(2, 3) . '<br>';
echo "sqrt(16)" . sqrt(16) . '<br>';
echo "max(2,9,3)" . max(2, 9, 3) . '<br>';
echo "min(2,3)" . min(2, 3) . '<br>';
echo "round(2.4)" . round(2.4) . '<br>';
echo "round(2.6)" . round(2.6) . '<br>';

//rounds off a number the the nearest value on the lower side
echo "floor(2.6)" . floor(2.6) . '<br>';

//rounds off a number to the nearest value on the higher side
echo "ceil(2.4)" . ceil(2.4) . '<br>';


// Formatting numbers

$number = 123456789.12345;

//begins with a decimal separator then the thousand seperator
echo number_format($number, 2, '.', ',');

// https://www.php.net/manual/en/ref.math.php
