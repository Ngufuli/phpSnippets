<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php|class</title>
</head>
<body>
    <?php
        class Novel{
            //Title, Author and Number of pages
            //Above will be the attributes
            //Novel will be the datatype

            var $title; 
            var $author;
            var $pages;
        }

        $novel1 = new Novel;
        $novel1->title= "Business School";
        $novel1->author= "Robert Kiyosaki";
        $novel1->pages= "500";

        $novel2 = new Novel;
        $novel2->title = "Lord of the rings";

        echo $novel1->author;
        echo $novel2->title;
    ?>
</body>
</html>