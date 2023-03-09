<?php 

$connection=mysqli_connect('localhost','root','','example');
if($connection){
    echo"we connect";
}
else{
    die("can't");
}

$query="SELECT * FROM loginuser";

$result=mysqli_query($connection,$query);

if(!$result){
    die("query failrd");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="col-sm-6">
        <?php 
        while($row=mysqli_fetch_assoc($result)){

            ?>
            <pre>
                <?php
            print_r($row);
            ?>
            </pre>
             
            <?php
            
        }
         
        ?>
    
</div>
  </div>
  