<?php
function calculate($input) {
    if (preg_match('/^\s*(\d+)\s*([\+\-\*\/])\s*(\d+)\s*$/', $input, $matches)) {

        $num1 = (int)$matches[1];
        $operator = $matches[2];
        $num2 = (int)$matches[3];


        switch ($operator) {
            case '+':
                return $num1 + $num2;
            case '-':
                return $num1 - $num2;
            case '*':
                return $num1 * $num2;
            case '/':
                if ($num2 == 0) {
                    return "Error: Division by zero.";
                }
                return $num1 / $num2;
            default:
                return "Error: Unsupported operation.";
        }
    } else {
        return "Error: Invalid input format.";
    }
}

// Example usage:
$input = "23+2";
$result = calculate($input);
echo "Result: " . $result;
?>
