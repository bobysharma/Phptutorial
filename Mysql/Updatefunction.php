
<?php  include"db.php";?>
<?php

function createdata(){
    global $connection;
    $username=$_POST['username'];
    $password=$_POST['password'];
//    $connection=mysqli_connect('localhost','root','','example');
   
//    if($connection){
//        echo"we connect";
//    }
//    else{
//        die("we can't");
//    }
   $query="INSERT INTO loginuser(name,password)";
   $query .="VALUES('$username','$password')";
   $result=mysqli_query($connection,$query);
   
   if(!$result){
       die('query faild'.mysqli_error($connection));
   }   
   else{
    echo("Record create success");
   }
   
}



function showalldata(){
    global $connection;
$query="SELECT * FROM loginuser";

$result=mysqli_query($connection,$query);

if(!$result){
    die("query failrd");
} 

while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    echo "<option value='$id'>$id</option>";


}

}


function updatedata(){

    global $connection;

    $username=$_POST['username'];
    $password=$_POST['password'];
    $id=$_POST['id'];

    $query="UPDATE  loginuser SET ";
    $query .="name='$username', ";
    $query .="password='$password' ";
    $query .=" WHERE id=$id ";

    $result=mysqli_query($connection,$query);

    if(!$result){
        die("query failed");
    }
    else{
        echo"Update success";
    }


}
function deletedata(){

    if(isset($_POST['submit'])){
    global $connection;

    $username=$_POST['username'];
    $password=$_POST['password'];
    $id=$_POST['id'];

    $query="DELETE FROM loginuser ";
  
    $query .=" WHERE id=$id ";

    $result=mysqli_query($connection,$query);

    if(!$result){
        die("query failed");
    }
    else{
        echo" delete data success";
    }


}

}



?>
