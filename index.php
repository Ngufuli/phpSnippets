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
                <td>Age: </td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td>Submit</td>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>
    <br/>
    <?php
        $output = $_GET['name'];
        $outputt = $_GET['age'];
        echo "Your name is: ".$output;
        echo "<br/>";
        echo "Your age is: ".$outputt;

    ?>
</body>
</html>