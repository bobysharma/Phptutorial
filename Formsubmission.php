<?php
// if(isset($_POST['submit'])){
 
//  $name=["boby","ravi","pradip","gopal","Mishra"];
 
 
//     echo "yes";
//     $username=$_POST['username'];
//     $password=$_POST['password'];
//     // echo $username.$password;
//     $count=5;
//     $count2=10;
//      if(strlen($username)<$count){
//         echo"username has to be longer than five";
//      }
//      if(strlen($username)>$count2){
//         echo"user can not be  longer than ten";
//      }
//      if(!in_array($username,$name)){
//         echo"sorry you are not allowed";
//      }
//      else{
//         echo"welcome";
//      }

// }

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
    <form action="Form_process.php" method="post">
        <input type="text" placeholder="Enter your name" name="username"><br>

        <input type="password"  placeholder="PAssword" name="password" ><br>
        <input type="submit" name="submit">

    </form>
    
</body>
</html>