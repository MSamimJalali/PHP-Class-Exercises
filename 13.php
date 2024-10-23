<?php
// Function to generate Fibonacci sequence up to a specified number
function fibonacci($limit) {
    $sequence = [];
    $a = 0;
    $b = 1;
    while ($a <= $limit) {
        $sequence[] = $a;
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }
    return $sequence;
}

// Example usage
$limit = 21; // User-defined limit
print_r(fibonacci($limit));
?>
