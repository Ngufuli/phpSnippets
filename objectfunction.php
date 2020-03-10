<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function|objects</title>
</head>
<body>
    <?php
        class Student{
            var $name;
            var $course;
            var $gpa;

            function __construct($n, $c, $g){
                $this->name = $n;
                $this->course = $c;
                $this->gpa = $g;
            }

            function hasHonors(){
                if($this->gpa >= 3.5){
                    echo "The student has honors";
                }
                else{
                    echo "The student doesn't have honors";
                }
            }
        }

        $Student1 = new Student('Zam',"Business", 3.5);
        $Student2 = new Student("Zim", "Arts", 3.4);

        e
    ?>
</body>
</html>