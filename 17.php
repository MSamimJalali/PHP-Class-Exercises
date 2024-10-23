<?php
// Function to return numbers greater than a threshold
function filterGreaterThan($array, $threshold) {
    $result = [];
    foreach ($array as $number) {
        if ($number > $threshold) {
            $result[] = $number;
        }
    }
    return $result;
}

// Example usage
$array = [5, 10, 15, 20];
$threshold = 12;
print_r(filterGreaterThan($array, $threshold));
?>
