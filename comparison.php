<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comparison|php</title>
</head>
<body>
    <form action="comparison.php" method="post">

        <table>
            <tr>
                <td>Enter the first number: </td>
                <td><input type="number" name="num1"></td>
            </tr>

            <tr>
                <td>Enter the second number: </td>
                <td><input type="number" name="num2"></td>
            </tr>

            <tr>
                <td>Enter the third number: </td>
                <td><input type="number" name="num3"></td>
            </tr>

            <tr>
                <td>Submit</td>
                <td><input type="submit"></td>
            </tr>
        </table>
    
    </form>



    <?php
        $one = $_POST['num1'];
        $two = $_POST['num2'];
        $three = $_POST['num3'];

        function getMax($num1, $num2, $num3){
            if($num1>=$num2 && $num1>=$num3){
                return $num1;
            }
            else if($num2>$num3 && $num2>$num1){
                return $num2;
            }
            else{
                return $num3;
            }
        }

        echo getMax($one, $two, $three);
    ?>
</body>
</html>