<?php
// Function to create a mathematical operation dynamically
function createOperation($operation) {
    switch ($operation) {
        case 'add':
            return function($a, $b) { return $a + $b; };
        case 'subtract':
            return function($a, $b) { return $a - $b; };
        case 'multiply':
            return function($a, $b) { return $a * $b; };
        case 'divide':
            return function($a, $b) { return $b !== 0 ? $a / $b : null; };
        default:
            return null;
    }
}

// Example usage
$add = createOperation('add');
echo $add(5, 3); // Output: 8
?>
