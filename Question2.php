<?php
//Write a PHP function that accepts an array of strings and return the longest string found in the array,
//the function should have a 2nd argument that will hold the index of the item that have the longest string in the input array.

function longString($array,&$x2)  {
    $x1= " ";
    $x2=0;
    foreach($array as $index => $string ){
        if (strlen($string) > strlen($x1)) {
            $x1 = $string;
            $x2 = $index;
        }
    }
    return $x1;
}


$strings = array("aya", "akram", "nnnnnnnnn");
$index = 0;
$longest = longString($strings, $index);
echo "Longest string  $longest, at index $index"; 
?>