<?php
// Function to apply a callback to each element of an array
function applyCallback($array, $callback) {
    return array_map($callback, $array);
}

// Example usage with a closure
$numbers = [1, 2, 3, 4, 5];
$result = applyCallback($numbers, function($number) {
    return $number * 2;
});
print_r($result);
?>
