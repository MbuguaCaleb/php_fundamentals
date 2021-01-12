<?php

// Create simple string
$string = 'Hello Caleb';
$string2 = "Hello Mbugua";

echo $string . '<br>';
echo $string2 . '<br>';

//difference between double and single quatation

$name = 'Humphrey';

$concat1 = 'Hello i am ' . $name . 'I am 58 years old';

echo '<br>';

$concat2 = "Hello i am  $name .I am 58 years old";

echo $concat1;
echo $concat2;

echo '<br>';

//It is easier to concatenate while using double quoatation

// String concatenation
echo 'Hello' . 'World' . 'Caleb Loves PHP' . '<br>';

// String functions

$string = "    Hello World   ";

//Calculates the length  of the String
echo "1-" . strlen($string) . '<br>';

//removes white spaces at the beginning and the end of string
echo "2-" . trim($string) . '<br>';

//remove white space on the left side of the String
echo "3-" . ltrim($string) . '<br>';

//removes white spaces on the right side
echo "4-" . rtrim($string) . '<br>';

//number of words in a string
echo "5-" . str_word_count($string) . '<br>';

//reverses the String
echo "6-" . strrev($string) . '<br>';

//str to upper
echo "7-" . strtoupper($string) . '<br>';

//str to lower
echo "8-" . strtolower($string) . '<br>';

//upper case first
echo "9-" . ucfirst('hello') . '<br>';

//lower ase first
echo "10-" . lcfirst('HELLO') . '<br>';

//Fist letter in words to upper case
echo "11-" . ucwords('hello world') . '<br>';

//searches for the position of world in this string
//it is senstitive to the case.
echo "12-" . strpos($string, 'world') . '<br>';

//searches for the position of world in this string
//it is Insenstitive to the case.
echo "13-" . stripos($string, 'hello') . '<br>';

//filters and returns a sub string of the string
//it is going the extract the whole string from position 8
echo "14-" . substr($string, 8) . '<br>';

//You may as well specify the length of the substring
echo "15-" . substr($string, 8, 6) . '<br>';

//replace words in a string with some others
//This is sensitive to the case
echo "16-" . str_replace('world', 'PHP', $string) . '<br>';

//replaces but is not senstive to the case
echo "17-" . str_ireplace('world', 'PHP', $string) . '<br>';

// Multiline text and line breaks

$longText = "
Hello, my name is Caleb.
I love programming,
and playing guitar
I love Jesus.
";

echo $longText . '<br>';
echo nl2br($longText) . '<br>';

// Multiline text and reserve html tags

$longText = "
Hello, my name is <b>Caleb</b>.
I am <b>25</b> years
I love programming,
and playing guitar
I love Jesus.
";

echo "1-" . $longText . '<br>';
echo "2-"  . nl2br($longText) . '<br>';

//preserves the HTML Tags
echo "3-" . htmlentities($longText) . '<br>';

echo "4-" . nl2br(htmlentities($longText)) . '<br>';

//deconde html entities
echo "5-" . html_entity_decode('&lt;b&gt;Caleb&lt;/b&gt');
// https://www.php.net/manual/en/ref.strings.php