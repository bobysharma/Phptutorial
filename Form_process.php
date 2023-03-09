<?php
if(isset($_POST['submit'])){
 
 $name=["boby","ravi","pradip","gopal","Mishra"];
 
 
    echo "yes";
    $username=$_POST['username'];
    $password=$_POST['password'];
    // echo $username.$password;
    $count=5;
    $count2=10;
     if(strlen($username)<$count){
        echo"username has to be longer than five";
     }
     if(strlen($username)>$count2){
        echo"user can not be  longer than ten";
     }
     if(!in_array($username,$name)){
        echo"sorry you are not allowed";
     }
     else{
        echo"welcome";
     }

}

?>
