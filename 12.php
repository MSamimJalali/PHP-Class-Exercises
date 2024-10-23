<?php
// Function to generate an array of random integers and calculate the sum
function generateRandomArraySum($count) {
    $array = [];
    for ($i = 0; $i < $count; $i++) {
        $array[] = rand(1, 100);
    }

    $sum = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($i % 2 != 0) continue; // Skip every second number
        $sum += $array[$i];
    }

    return $sum;
}

// Example usage
$size = 10; // User-defined size
echo generateRandomArraySum($size);
?>
