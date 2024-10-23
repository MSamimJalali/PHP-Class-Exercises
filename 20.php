<?php
// Recursive function to check if a string is a palindrome
function isPalindrome($string) {
    $string = strtolower(preg_replace('/[^a-z0-9]/', '', $string));
    if (strlen($string) < 2) return true;
    if ($string[0] !== $string[strlen($string) - 1]) return false;
    return isPalindrome(substr($string, 1, -1));
}

// Example usage
$string = "A man, a plan, a canal, Panama";
echo isPalindrome($string) ? "Palindrome" : "Not a palindrome";
?>
