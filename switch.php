<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch|php</title>
</head>
<body>
    <form action="switch.php" method="post">
        <table>
            <tr>
                <td>Enter your grade: </td>
                <td><input type="text" name="grade"></td>
            </tr>
            <tr>
                <td>Submit: </td>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>

    <?php
        $grade = $_POST['grade'];

        switch($grade){
            case 'A':
                echo "You did amazing!";
            break;

            case 'B':
                echo "You did good!";
            break;

            case 'C':
                echo "You tried";
            break;

            case 'D':
                echo "Do better next time";
            break;

            default:
                echo "Enter a valid grade from A - D";
            break;
        }
    ?>
</body>
</html>