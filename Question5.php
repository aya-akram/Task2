<?php
//Write a function to check whether a number is prime or not.

function isPrime($n) {
    if ($n <= 1) {
        return false;
    }
    if ($n <= 3) {
        return true;
    }
    if ($n % 2 == 0 || $n % 3 == 0) {
        return false;
    }
    for ($i = 5; $i * $i <= $n; $i += 6) {
        if ($n % $i == 0 || $n % ($i + 2) == 0) {
            return false;
        }
    }
    return true;
}
echo isPrime(7) ? "Prime" : "Not prime"; 

?>