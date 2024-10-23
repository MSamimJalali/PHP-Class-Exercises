<?php

function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}


function fizzBuzzPrime($num) {

    if (isPrime($num)) {
        return "Prime";
    }

    if ($num % 3 == 0 && $num % 5 == 0) {
        return "FizzBuzz";
    } elseif ($num % 3 == 0) {
        return "Fizz";
    } elseif ($num % 5 == 0) {
        return "Buzz";
    } else {
        return $num;
    }
}

// Example usage:
$number = (int)readline("Enter a number: ");
echo fizzBuzzPrime($number);
?>
