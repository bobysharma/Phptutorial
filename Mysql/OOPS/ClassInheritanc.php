<?php 
class Car{
    var $wheels=4;
    var $doors=13;
    function Door(){
        $this->wheels=10;
    }


}
class Plane extends Car{

}
$jet=new Plane();
echo $jet->wheels;
$jet->Door();
echo"DOOR=".$jet->wheels;

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