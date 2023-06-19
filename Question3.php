<?php
//Write a function that accepts 2 arrays and return a new array that holds the value of multiplying each item in the first array by the corresponding item in the second array.


function mult($array1, $array2) {
    $length1 = count($array1);
    $length2 = count($array2);
    
    if ($length1 != $length2) {
        if ($length1 < $length2) {
            $array1 = array_pad($array1, $length2, 0);
        } else {
            $array2 = array_pad($array2, $length1, 0);
        }
    }
    
    $result = array();
    for ($i = 0; $i < count($array1); $i++) {
        $result[] = $array1[$i] * $array2[$i];
    }
    return $result;
}

$array1 = array(1, 2, 3, 4,2,2,2);
$array2 = array(5, 6, 7,3,2);
$x3 = mult($array1, $array2); 

if($x3) {
    print_r($x3);
} else {
    echo "error ,the array 1 and array 2 not same length.\n";
}




?>