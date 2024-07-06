<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="num1" placeholder="Enter a number">
        <input type="text" name="num2" placeholder="Enter a number">
        <select name="operator">
            <option value="None">None</option>
            <option value="Add">Add</option>
            <option value="Subtract">Subtract</option>
            <option value="Multiply">Multiply</option>
            <option value="Divide">Divide</option>
        </select>
        <br>
        <br>
        <button type="submit" name="submit">Calculate</button>
    </form>
    <p>The answer is: </p>

    <?php
        if (isset($_GET['submit'])) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $operator = $_GET['operator'];

            switch ($operator) {
                case 'Add':
                    $result = $num1 + $num2;
                    break;
                case 'Subtract':
                    $result = $num1 - $num2;
                    break;
                case 'Multiply':
                    $result = $num1 * $num2;
                    break;
                case 'Divide':
                    $result = $num1 / $num2;
                    break;
                default:
                    $result = "Please select an operator.";
                    break;
            }

            echo $result;
        }
    ?>
</body>
</html>
