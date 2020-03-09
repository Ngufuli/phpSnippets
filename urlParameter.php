<!-- Used in bookmarking information on webpages -->
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
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>

            <tr>
                <td>Submit: </td>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>

    <?php

        echo $_POST['name'];
        echo $_POST['password'];

    ?>
</body>
</html>