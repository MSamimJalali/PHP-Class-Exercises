<?php
// Function to find the student with the highest average score
function highestAverage($students) {
    $highestStudent = '';
    $highestAvg = 0;

    foreach ($students as $student => $scores) {
        $avg = array_sum($scores) / count($scores);
        if ($avg > $highestAvg) {
            $highestAvg = $avg;
            $highestStudent = $student;
        }
    }

    return [$highestStudent, $highestAvg];
}

// Example usage
$students = [
    'Alice' => [90, 80, 85],
    'Bob' => [70, 75, 80],
    'Charlie' => [95, 95, 100]
];
list($name, $avg) = highestAverage($students);
echo "$name has the highest average score of $avg";
?>
