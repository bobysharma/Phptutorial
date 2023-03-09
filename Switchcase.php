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
    
    $number=55;
    switch($number){
        case 45:
            echo`the number is`. $number;
            break;
        case 23:
            echo"the number is ".$number;
           break;
        case 34:
            echo"the number is ".$number;
            break;
            default :
            echo"the default  number is".$number;
            break;

    }
    
    ?>

    
</body>
</html>