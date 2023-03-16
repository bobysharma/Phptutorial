<?php include "db.php";
include "Updatefunction.php";


     deletedata();

 
?>
 
 <?php 
 include "include/header.php";
 ?>
     <div class="col-sm-6">
        <form action="delete.php" method="post">
            
            <div class="form-group">
            <label  for="password">usename</label>
                <input type="text" class="form-control" name="username">
                
            </div>
            <div class="form-group">
                <label  for="password">passwrd</label>
                <input type="password" class="form-control" name="password">
                
            </div>
            <div class="form-group">
                <select name="id" id="">
                    <?php 
                    showalldata();
                    
                    ?>
                    
                </select>
    
                
            </div>
            <input type="submit" class="btn btn-primary" value="Delete" name="submit">
        </form>
    </div>
    <?php
  include "include/footer.php";
  ?>