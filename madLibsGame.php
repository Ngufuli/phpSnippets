<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>madLibsGame|php</title>
</head>
<body>
    <form action="madLibsGame.php" action="get">
        <table>
            <tr>
                <td>Color: </td>
                <td><input type="text" name="color"></td>
            </tr>

            <tr>
                <td>Plural Noun: </td>
                <td><input type="text" name="pluralNoun"></td>
            </tr>

            <tr>
                <td>Celebrity</td>
                <td><input type="text" name="celebrity"></td>
            </tr>

            <tr>
                <td>Submit</td>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>
    <br>

    <?php
        $color = $_GET['color'];
        $pluralNoun = $_GET['pluralNoun'];
        $celebrity = $_GET['celebrity'];


        echo "Roses are $color";
        echo "<br/>";
        echo "$pluralNoun are blue";
        echo "<br/>";
        echo "I love $celebrity";
    ?>
</body>
</html>