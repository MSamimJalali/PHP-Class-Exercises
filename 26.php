<?php
// Recursive Fibonacci function with memoization
function fibonacciMemo($n, &$memo = []) {
    if ($n <= 1) {
        return $n;
    }
    
    if (!isset($memo[$n])) {
        $memo[$n] = fibonacciMemo($n - 1, $memo) + fibonacciMemo($n - 2, $memo);
    }
    
    return $memo[$n];
}

// Example usage
$n = 10; // User-defined position
echo "Fibonacci number at position $n: " . fibonacciMemo($n);
?>
