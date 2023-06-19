<?php
//Write a PHP function that accepts an array of integers and return a new array after removing odd

function removeOddNumbers($array) {
    $result = array();
    foreach ($array as $number) {
        if ($number % 2 == 0) {
            $result[] = $number;
        }
    }
    return $result;
}
$numbers = array(1, 20, 33, 4, 5, 6,7);
$evenNumbers = removeOddNumbers($numbers);
print_r($evenNumbers); 


?>