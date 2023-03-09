<?php 
if(isset($_POST['submit'])){
 $username=$_POST['username'];
 $password=$_POST['password'];
$connection=mysqli_connect('localhost','root','','example');

if($connection){
    echo"we connect";
}
else{
    die("we can't");
}


 //  echo $username;
//  echo $password;
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
        <h1 class="text-center">Create</h1>
        <form action="Login.php" method="post">
            
            <div class="form-group">
            <label  for="password">usename</label>
                <input type="text" class="form-control" name="username">
                
            </div>
            <div class="form-group">
                <label  for="password">passwrd</label>
                <input type="password" class="form-control" name="password">
                
            </div>
            <input type="submit" class="btn btn-primary" value="Login" name="submit">
        </form>
    </div>
  </div>  
</body>
</html>