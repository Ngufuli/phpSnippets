<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructors|php</title>
</head>
<body>
    

    <?php
    //function which is called when we create an object of a class
    class Novel{
        var $title;
        var $author;
        var $pages;

        function __construct(){
            echo "New novel created<br/>";
        }
    }


   $novel1 = new Novel;
    $novel1->title="The beginnig";
    $novel1->author="Nick";
    $novel1->pages=400;




   $novel2 = new Novel;
    $novel2->title="The ending";
    $novel2->author="Nickolson";
    $novel2->pages=440;


    echo $novel1->title;
    echo "<br>";
    echo $novel2->title;


    ?>
</body>
</html>