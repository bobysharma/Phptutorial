<?php 
include "Updatefunction.php";

?>

<?php 
if(isset($_POST['submit'])){
 createdata();
 //  echo $username;
//  echo $password;
}

?>

<?php 
 include "include/header.php";
 ?> 
<div class="col-sm-6">
        <h1 class="text-center">Create Data</h1>
        <form action="Post_data.php" method="post">
            
            <div class="form-group">
            <label  for="password">usename</label>
                <input type="text" class="form-control" name="username">
                
            </div>
            <div class="form-group">
                <label  for="password">passwrd</label>
                <input type="password" class="form-control" name="password">
                
            </div>
            <input type="submit" class="btn btn-primary" value="Create" name="submit">
        </form>
    </div>
    <?php
  include "include/footer.php";
  ?>