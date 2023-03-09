<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=10;
    $b="11";

    if($a===$b || 5<10){
        echo "it is true";
    }
    else{
        echo"it is not true";
    }

    if($a!==$b && 5<10){
        echo "it is true";
    }
    else{
        echo"it is not true";
    }
    if($a<$b){
        echo"it is true";
    }
    ?>
</body>
</html>