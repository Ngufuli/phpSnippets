<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parametarize|constructor</title>
</head>
<body>
    

<?php
        class Car{
            var $make;
            var $model;
            var $price;

            function __construct($Amake, $Amodel, $Aprice){
                $this->make = $Amake;
                $this->model = $Amodel;
                $this->price = $Aprice;
                //this is refering to the current object

            }
        }
?>
</body>
</html>