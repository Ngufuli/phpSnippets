<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ifStatements|inPhp</title>
</head>
<body>
    

    <?php
    $isHuman = false;
    $isEarth = false;

    if($isHuman && $isEarth){
        echo "<center><h1><pre>He is a human being from planet Earth</pre></h1></center>";
    }
    else if(!$isHuman && $isEarth){
        echo "<center><h1><pre>He is not a Human being but he is from planet Earth</pre></h1></center>";
    }
    else if($isHuman && !$Earth){
        echo "<center><h1><pre>He is a human being but not from planet Earth</pre></h1></center>";
    }
    else {
        echo "<center><h1><pre>He is neither a human being nor a creature from planet Earth, there-fore he is an Interplanetary Alien.</pre></h1><center>";
    }

    ?>
</body>
</html>