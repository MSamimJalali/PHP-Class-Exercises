<?php
// Higher-order function to apply a function to a 2D array
function applyTo2DArray($array, $callback) {
    return array_map(function($subArray) use ($callback) {
        return array_map($callback, $subArray);
    }, $array);
}

// Example usage
$numbers2D = [[1, 2], [3, 4]];
$result = applyTo2DArray($numbers2D, function($number) {
    return $number * 2;
});
print_r($result);
?>
