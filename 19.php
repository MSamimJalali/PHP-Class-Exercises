<?php
// Function to merge two associative arrays keeping the higher score
function mergeScores($array1, $array2) {
    $merged = $array1;
    foreach ($array2 as $student => $score) {
        if (isset($merged[$student])) {
            $merged[$student] = max($merged[$student], $score);
        } else {
            $merged[$student] = $score;
        }
    }
    return $merged;
}

// Example usage
$scores1 = ['Alice' => 80, 'Bob' => 70];
$scores2 = ['Alice' => 90, 'Charlie' => 60];
print_r(mergeScores($scores1, $scores2));
?>
