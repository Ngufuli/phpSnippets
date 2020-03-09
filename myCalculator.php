<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php|calculator</title>
</head>
<body>
    <form action="myCalculator.php" method="get">
        <table>
            <tr>
                <td>Enter first number:</td>
                <td><input type="number" name="num1"></td>

            </tr>

            <tr>
                <td>Enter second number:</td>
                <td><input type="number" name="num2"></td>

            </tr>
            <tr>
                <td>Submit: </td>
                <td><input type="submit"></td>

            </tr>
        </table>

    </form>

    <?php
        echo $_GET['num1'] + $_GET['num2'];
    ?>
</body>
</html>