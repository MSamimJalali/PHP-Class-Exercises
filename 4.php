<?php

class InvalidTypeException extends Exception {}

function detectDataType($variable) {
    $type = gettype($variable);

    // Check for resource type
    if ($type === 'resource') {
        throw new InvalidTypeException("Invalid type encountered: resource");
    }

    return $type;
}

function displayDataTypes(array $variables) {
    foreach ($variables as $key => $value) {
        try {
            $type = detectDataType($value);
            echo "Variable '{$key}' is of type: {$type}" . PHP_EOL;
        } catch (InvalidTypeException $e) {
            echo "Error: " . $e->getMessage() . PHP_EOL;
        }
    }
}

// Example usage
$variables = [
    'integer' => 42,
    'string' => 'Hello, World!',
    'array' => [1, 2, 3],
    'float' => 3.14,
    'boolean' => true,
    'object' => new stdClass(),
    // Uncomment the next line to test the exception
    // 'resource' => fopen('php://stdout', 'w'), 
];

displayDataTypes($variables);
?>