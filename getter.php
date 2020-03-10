<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getter|attributes</title>
</head>
<body>
    

<?php
    class Movie{
        public $name;
        private $rating;

        function __construct($name, $rating){
            $this->name=$name;
            $this->rating=$rating;
        }

        function getRating(){
            return $this->rating;
        }

        function setRating($rating){
            $this->rating=$rating;
        }
    }

    $Avengers = new Movie("Avengers", "PG-13");

    $Avengers->setRating('PG-16');
    echo $Avengers->getRating();

   
    
?>
</body>
</html>