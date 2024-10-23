<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2st Exercise</title>
</head>
<body>

    <h2>2nd Exercise: Currency Converter</h2>
    <form method="post">
        <label for="amounts">Enter amounts (comma-separated):</label>
        <input type="text" id="amounts" name="amounts" required><br><br>
        <label for="direction">Convert to:</label>
        <select name="direction" id="direction">
            <option value="USD to EUR">USD to EUR</option>
            <option value="EUR to USD">EUR to USD</option>
        </select><br><br>
        <input type="submit" value="Convert">
    </form>

    <?php 
        define("EXCHANGE_RATE", 0.85);

        function convertCurrency($amounts, $direction) {
            $convertedAmounts = [];

            foreach ($amounts as $amount) {
                $amount = floatval(trim($amount));

                if ($direction === "USD to EUR") {
                    $convertedAmounts[] = round($amount * EXCHANGE_RATE, 2);
                }
                else {
                    $convertedAmounts[] = round($amount / EXCHANGE_RATE, 2);
                }
            }

            return $convertedAmounts;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $amountsInput = $_POST['amounts'];
            $direction = $_POST['direction'];

            $amountsArray = explode(',', $amountsInput);

            $convertedAmounts = convertCurrency($amountsArray, $direction);

            echo "<h3>Converted Amounts:</h3>";
            foreach ($convertedAmounts as $convertedAmount) {
                echo "$convertedAmount<br>";
            }
        }
    ?>

</body>
</html>