<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator Program in PHP</title>
</head>
<body>
    <?php
    $FirstNumber = $_POST['FirstNumber'] ?? '';
    $SecondNumber = $_POST['SecondNumber'] ?? '';
    $operator = $_POST['operator'] ?? '';
    $CalculatorResult = '';

    if (is_numeric($FirstNumber) && is_numeric($SecondNumber)) {
        switch ($operator) {
            case "Sum":
                $CalculatorResult = $FirstNumber + $SecondNumber;
                break;
            case "Subtraction":
                $CalculatorResult = $FirstNumber - $SecondNumber;
                break;
            case "Multiplication":
                $CalculatorResult = $FirstNumber * $SecondNumber;
                break;
            case "Division":
                if ($SecondNumber != 0) {
                    $CalculatorResult = $FirstNumber / $SecondNumber;
                } else {
                    $CalculatorResult = "Cannot divide by zero";
                }
                break;
        }
    }
    ?>

    <div id="page-wrap">
        <h1>PHP - Simple Calculator Program</h1>
        <form action="" method="post" id="calculator-form">
            <p>
                <input type="number" name="FirstNumber" id="FirstNumber" required value="<?= $FirstNumber ?>" />
                <b>First Number</b>
            </p>
            <p>
                <input type="number" name="SecondNumber" id="SecondNumber" required value="<?= $SecondNumber ?>" />
                <b>Second Number</b>
            </p>
            <p>
                <input readonly name="CalculatorResult" value="<?= $CalculatorResult ?>" />
                <b>Calculator Result</b>
            </p>
            <input type="submit" name="operator" value="Sum" />
            <input type="submit" name="operator" value="Subtraction" />
            <input type="submit" name="operator" value="Multiplication" />
            <input type="submit" name="operator" value="Division" />
        </form>
    </div>
</body>
</html>