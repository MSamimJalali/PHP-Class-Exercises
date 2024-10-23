<?php
function areEqual($a, $b) {
    // Use bitwise XOR to check if the two numbers are equal
    return ($a ^ $b) === 0;
}

// Example usage:
$num1 = 345;
$num2 = 467;

if (areEqual($num1, $num2)) {
    echo "The numbers are equal.";
} else {
    echo "The numbers are not equal.";
}
?>
