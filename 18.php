<?php
// Function to filter words without vowels and reverse them
function filterAndReverseWords($words) {
    $filtered = array_filter($words, function($word) {
        return !preg_match('/[aeiouAEIOU]/', $word);
    });

    return array_map('strrev', $filtered);
}

// Example usage
$words = ['sky', 'hello', 'why', 'PHP', 'rhythm'];
print_r(filterAndReverseWords($words));
?>
