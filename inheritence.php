<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inheritence|php</title>
</head>
<body>
    
    <?php
        class Chef{
            function makeChicken(){
                echo "The chef makes chicken<br>";
            }
            function makeSalad(){
                echo "The chef makes salad<br>";
            }
            function makeSpecialDish(){
                echo "The chef makes bbq";
            }
        }

        class italianChef extends Chef{
            function makeFruits(){
                echo "The chef makes fruits";
            }
        }

        $cheftz = new Chef();
        $cheftz->makeChicken();

        $chefItalian = new italianChef();
        $chefItalian->makeSalad();
    ?>
</body>
</html>