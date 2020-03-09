<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php|urlParameter</title>
</head>
<body>
    <form action="urlParameter.php" method="post">
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
                <td></td>
                <td></td>
            </tr>
        </table>
    </form>

    <?php

        echo $_POST['name'];

    ?>
</body>
</html>