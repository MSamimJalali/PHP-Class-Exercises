<?php
// Function to find prime numbers up to a specified number
function findPrimes($number) {
    $primes = [];
    for ($i = 2; $i <= $number; $i++) {
        $isPrime = true;
        for ($j = 2; $j * $j <= $i; $j++) {
            if ($i % $j == 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) {
            $primes[] = $i;
        }
    }
    return $primes;
}

// Example usage
$limit = 30; // User-defined limit
print_r(findPrimes($limit));
?>
