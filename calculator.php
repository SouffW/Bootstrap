<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $operator = $_POST['operator'];
    }
    ?>
    <form action="" method="POST">
        <h1>Calculator</h1>
        <label for="number1"><strong>Number 1:</strong></label>
        <input type="text" name="number1" id="number1"><br><br>
        <label for="number1"><strong>Number 2:</strong></label>
        <input type="text" name="number2" id="number2">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($number2 == 0) {
                echo "Division by zero is not allowed!";
            }
        }

        ?><br><br>
        <input type="submit" name="operator" value="Add">
        <input type="submit" name="operator" value="Subtract">
        <input type="submit" name="operator" value="Mulitply">
        <input type="submit" name="operator" value="Divide">
        <input type="submit" name="operator" value="Modulo">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!is_numeric($number1)) {
            echo "Number 1 is not a number!";
        } elseif (!is_numeric($number2)) {
            echo "Number 2 is not a number!";
        } else {
            switch ($operator) {
                case 'Add':
                    echo "Operation: Add <br>";
                    echo "Result: " . $number1 + $number2;
                    break;
                case 'Subtract':
                    echo "<strong> Operation: Subtract </strong> <br>";
                    echo "Result: " . $number1 - $number2;
                    break;
                case 'Multiply':
                    echo "Operation: Multiply <br>";
                    echo "Result: " . $number1 * $number2;
                    break;
                case 'Divide':
                    if ($number2 != 0) {
                        echo "Operation: Divide <br>";
                        echo "Result: " . $number1 / $number2;
                    }
                    break;
                case 'Modulo':
                    if ($number2 == 0) {
                        echo "Division by zero is not allowed!";
                    } else {
                        echo "Operation: Modulo <br>";
                        echo "Result: " . fmod($number1, $number2);
                    }
                    break;
            }
        }
    }
    ?>
</body>

</html>
