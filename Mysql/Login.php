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


 <?php 
 include "include/header.php";
 ?>
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
  <?php
  include "include/footer.php";
  ?>