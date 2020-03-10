<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions|php</title>
</head>
<body>
    
    <form action="functions.php" method="post">
   
    <table>
        <tr>
            <td>Enter your name: </td>
            <td><input type="text" name="vl"></td>
        </tr>

        <tr>
            <td>Submit: </td>
            <td><input type="submit" ></td>
        </tr>
    </table>
    </form>

    <?php
        $name = $_POST['vl'];

        function sayHi($name){
            echo "<center>Hello world!</center>";
            echo "<center><pre>My name is $name</pre></center>";
        }
        sayHi($name);
    ?>
</body>
</html>