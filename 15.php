<?php
// Function to sort an associative array by price
function sortByPrice($products) {
    arsort($products);
    return $products;
}

// Example usage
$products = [
    'Product A' => 30,
    'Product B' => 20,
    'Product C' => 50
];
print_r(sortByPrice($products));
?>
