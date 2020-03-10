<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>return|php</title>
</head>
<body>
    


    <?php
        function cube($number){
            $value = pow($number, 3);
            return $value;// from here we break out of the function 
        }

        $answer = cube(5);

        echo "<center><h1><pre>$answer</pre></h1></center>";
    ?>
</body>
</html>