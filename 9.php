<?php
function getPersonalizedMessage($age, $membershipStatus, $purchaseAmount) {
    // Nested ternary operators to determine the personalized message
    return ($age >= 60)
        ? "You qualify for the senior citizen discount."
        : (($membershipStatus === 'premium')
            ? (($purchaseAmount >= 100)
                ? "You qualify for a premium member discount on large purchases."
                : "You qualify for a premium member discount.")
            : (($purchaseAmount >= 100)
                ? "You qualify for a discount on large purchases."
                : "Thank you for your purchase!"));
}

// Example usage:
$age = 23;
$membershipStatus = "premium";
$purchaseAmount = 1234;

$message = getPersonalizedMessage($age, $membershipStatus, $purchaseAmount);
echo $message;
?>
