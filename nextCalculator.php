<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator|2.0</title>
</head>
<body>
    <form action="nextCalculator.php" method="post">
        <table>
            <tr>
                <td>Enter the first number:</td>
                <td><input type="number" name="num1"></td>
            </tr>

            <tr>
                <td>Choose an operation:</td>
                <td><input type="text" name="op"></td>
            </tr>

            <tr>
                <td>Enter the second number: </td>
                <td><input type="number" name="num2"></td>
            </tr>

            <tr>
                <td>Submit</td>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>


    <?php
        $numberOne = $_POST['num1'];
        $numberTwo = $_POST['num2'];
        $operator = $_POST['op'];

        if($operator == '+'){
            echo $numberOne + $numberTwo;
        }
        else if($operator == '-'){
            echo $numberOne - $numberTwo;
        }
        else if($operator == '*'){
            echo $numberOne * $numberTwo;
        }
        else if($operator == '/'){
            echo $numberOne / $numberTwo;
        }
        else if($operator == '%'){
            echo $numberOne % $numberTwo;
        }
        else{
            echo "Invalid operator";
        }
    ?>
</body>
</html>