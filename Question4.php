<?php
//Write a function to calculate the factorial of a number (a non-negative integer). The function accepts the number as an argument.


function factorial($n) {
    if (!is_int($n) || $n < 0) {
        return "Error: Input must be a non-negative integer.";
    }
    if ($n === 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

echo factorial(4);
?>