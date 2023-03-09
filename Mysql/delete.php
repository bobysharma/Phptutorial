<?php include "db.php";
include "Updatefunction.php";


     deletedata();

 
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
  </div>  
</body>
</html>  