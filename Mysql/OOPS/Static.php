<?php

use Car as GlobalCar;

class Car{
    static $wheels=4;
    var $doors=4;
    function Doors(){
        Car::$wheels=10;
    }

}
$bmw=new Car();
$bmw->Doors();
// Car::Doors();
// echo $bmw->$wheels; we cant use the static propeerty like this 
echo Car::$wheels; // we are access the static property like this
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>