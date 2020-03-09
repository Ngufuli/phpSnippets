<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>associative|arrays</title>
</head>
<body>
    
    <form action="associativeArrays.php" method="post">
        <table>
            <tr>
                <td>Enter name: </td>
                <td><input type="text" name="student"></td>
            </tr>

            <tr>
                <td>Submit</td>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>




    <?php
        $got = $_POST['student'];

        $grades = array('nick'=>'A+','pam'=>"B+","jim"=>'C-',"Oscar"=>'C+', "katy"=>"A+");

        echo $grades[$got];

    ?>
</body>
</html>