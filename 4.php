<?php
function detectingDataType($variable) {
    $type = gettype($variable);

    if ($type === "resource") {
        throw new Exception("Invalid type: Resource types are not allowed.");
    }

    return $type;
}

// Example:
$variables = [
    123,                        // Integer
    "Hello, world!",            // String
    45.67,                      // Float
    [1, 2, 3],                  // Array
    fopen("test.txt", "r"),     // Resource (will throw an exception)
    true                        // Boolean
];

try {
    foreach ($variables as $variable) {
        echo "Value: " . var_export($variable, true) . " | Type: " . detectingDataType($variable) . PHP_EOL;
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
