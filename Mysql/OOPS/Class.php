
<?php 
class Car{

    var $wheels=4;
    var $door=4;
    var $radio="on";
    function Wheelscar(){
        echo"carwheels";
        $this->wheels=10;
    }
    function Doors(){
        $this->door=20;

    }

}

if(class_exists('Car')){
    echo"yes";
}
else{
    echo"no";
}

if(method_exists("Car","Wheelscar")){
    echo"method is available";
}
else{
    echo"no method ";
}



$bmw=new Car();
$merces_benz=new Car();
$truck=new Car();
$bmw->Wheelscar();
echo"<br>";
// $bmw->door=8;
// echo $bmw->door;
 echo $bmw->wheels;
 $truck->Doors();
 echo "bmwdoor".$bmw->door."<br>";
 echo$truck->door;

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