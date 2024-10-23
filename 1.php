<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1st Exercise</title>
</head>
<body>
    <h2>1st Exercise: Enter Inputs</h2>
    <form method="post">
        <label for="input1">Input 1:</label>
        <input type="text" id="input1" name="input1" required><br><br>
        <label for="input2">Input 2:</label>
        <input type="text" id="input2" name="input2" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input1 = $_POST['input1'];
            $input2 = $_POST['input2'];

            // Check if both are number
            if (is_numeric($input1) && is_numeric($input2)) {
                $result = $input1 * $input2;
                echo "<h3> Result (Multiplication): $result</h3>";
            }

            // Check if one of input is number and the other one is string
            elseif (is_numeric($input1) || is_numeric($input2)) {
                $result = $input1 . $input2;
                echo "<h3>Result (Concatenation): $result</h3>";
            }

            // Check if both are string
            else {
                $inputs = [$input1, $input2];
                sort($inputs);
                echo "<h3>Result (Sorted): " . implode(", ", $inputs) . "</h3>";
            }
        }
    ?>

</body>
</html>