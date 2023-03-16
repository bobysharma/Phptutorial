<?php 
//  include "Updatefunction.php";

// $connection=mysqli_connect('localhost','root','','example');
// if($connection){
//     echo"we connect";
// }
// else{
//     die("can't");
// }
include "db.php";
include "Updatefunction.php";

?>
<?php 

include "include/header.php";

?>
  <div class="container">
    <div class="col-sm-6">
        
    <pre>
        <?php
        readdata();
        ?>
    </pre>         
            
    
</div>
  <?php 
  include "include/footer.php";
  ?>