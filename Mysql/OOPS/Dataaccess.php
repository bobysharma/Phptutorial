<?php

use Plane as GlobalPlane;

class Car{
    public $wheels=4;
    private $doors=2;
    protected $sound="on";

    function Doors(){
        echo $this->doors=10;
    }
}
class Plane extends Car{
     function parts(){
        echo $this->doors;
     }

}
$bmw=new Car();
$jet=new Plane();
echo $bmw->wheels."<br>";
// echo $bmw->doors ;    // can not property_exists in outside the class
// echo $bmw->sound; 
echo $bmw->Doors();
echo"<br>". $jet->wheels;  
// echo"<br>". $jet->doors;  undefined property 
// echo "<br>".$jet->sound;
$jet->parts();

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