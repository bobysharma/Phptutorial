<?php
$name="datainfo";
$value=1000;
$expiry=time()+(60*60*7);

setcookie($name,$value,$expiry);

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

<?php 

if(isset($_COOKIE['datainfo'])){
    $cookie=$_COOKIE['datainfo'];
    echo$cookie;
}
else{
    $cookie="";
}

?>
    <h1>hello</h1>
</body>
</html>