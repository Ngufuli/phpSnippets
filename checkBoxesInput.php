<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkBox|php</title>
</head>
<body>
    <form action="checkBoxesInput.php" method="post">
        <table>
            <tr>
                <td>Apples</td>
                <td><input type="checkbox" name="fruits[]" value="apples"></td>
            </tr>

            <tr>
                <td>Oranges</td>
                <td><input type="checkbox" name="fruits[]" value="oranges"></td>
            </tr>

            <tr>
                <td>Pineapples</td>
                <td><input type="checkbox" name="fruits[]" value="pineapples"></td>
            </tr>

            <tr>
                <td>Grapes</td>
                <td><input type="checkbox" name="fruits[]" value="grapes"></td>
            </tr>
            <tr>
                <td>Strawberries</td>
                <td><input type="checkbox" name="fruits[]" value="strawberries"></td>
            </tr>
            <tr>
                <td>Submit: </td>
                <td><input type="submit"></td>
            </tr>
            
        </table>
    </form>

    <?php
        $fruits = $_POST['fruits'];
        echo $fruits[1];
    ?>
</body>
</html>