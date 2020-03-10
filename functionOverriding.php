<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function|overriding</title>
</head>
<body>
    

<?php
    class Father{
        function country(){
            echo "I am an American citizen";
        }
        function profession(){
            echo "I am a software engineer";
        }
    }
    class Child extends Father{
        function education(){
            echo "I am pursuing Finance and Accounting";
        }
    }

    $child = new Child();
    $child->country();
?>
</body>
</html>