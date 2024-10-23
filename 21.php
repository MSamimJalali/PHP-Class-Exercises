<?php
// Anonymous function to filter numbers divisible by both 3 and 7
$array = [10, 21, 22, 32,19, 63, 72];
$result = array_filter($array, function($number) {
    return $number % 3 === 0 && $number % 7 === 0;
});
print_r($result);
?>
