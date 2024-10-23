<?php
function complexDecisionTree($conditions) {
    $cond1 = $conditions['cond1']; // First condition
    $cond2 = $conditions['cond2']; // Second condition
    $cond3 = $conditions['cond3']; // Third condition
    $cond4 = $conditions['cond4']; // Fourth condition
    
    if (($cond1 && $cond2) || (!$cond3 && $cond4)) {
        return "Decision: True";
    } else {
        return "Decision: False";
    }
}

// Example usage:
$conditions = [
    'cond1' => true,  // Example condition 1 (could be result of some other logical check)
    'cond2' => false, // Example condition 2
    'cond3' => true,  // Example condition 3
    'cond4' => true   // Example condition 4
];

// Evaluate the decision tree
$result = complexDecisionTree($conditions);
echo $result;
?>
