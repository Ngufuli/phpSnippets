<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php|input</title>
</head>
<body>
    

    <form action="index.php" method="get">
        <table>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Submit</td>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>
    <br/>
    <?php

        echo $_GET['name'];

    ?>
</body>
</html>