<?php
// Function to print the pattern
function printPattern($size) {
    // Outer loop for the number of rows
    for ($i = 1; $i <= $size; $i++) {
        // Inner loop for printing numbers
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " "; // Print the number followed by a space
        }
        echo "<br>"; // Move to the next line after each row
    }
}

$size = 4; // You can change this value to any positive integer

// Call the function to print the pattern
printPattern($size);
?>
