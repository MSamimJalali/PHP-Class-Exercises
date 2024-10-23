<?php
function calculateDiscount($yearsOfMembership, $isPremiumMember) {
    $discount = 0;

    // Nested conditional logic for membership years
    if ($yearsOfMembership > 5) {
        $discount = 30;
    } elseif ($yearsOfMembership >= 3 && $yearsOfMembership <= 5) {
        $discount = 20;
    } else {
        $discount = 10;
    }

    // Additional condition for premium members
    if ($isPremiumMember) {
        $discount += 10;  // Increase discount by 10% for premium members
    }

    return $discount;
}

// Example usage:
$yearsOfMembership = 6;
$isPremiumMember = 'yes';

$discount = calculateDiscount($yearsOfMembership, $isPremiumMember);
echo "The user gets a discount of: " . $discount . "%";
?>
