<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php|arrays</title>
</head>
<body>
    <?php

         $cars = array('lamborghini', 'bugatti', 'volkswagen','Hammer', 'Ferrari');
         $cars[2] = "Maseratti";

         echo $cars[1];
         echo '<hr/>';
         echo $cars[0];
         echo '<hr/>';
         echo $cars[2];
         echo '<br/>';
         echo count($cars);

    ?>
</body>
</html>