<?php
    
    include_once 'db.php';
    $uname=$_POST['uname'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $cpass=$_POST['cpassword'];
    if($pass == $cpass)
    {
        $query = "insert into user values('','$uname','$mobile','$email','$pass')";
   // echo $query;
    if(mysqli_query($conn,$query))
    {
        echo"Register Succsessfully..............";
    }
    else{
        echo"Error:".mysqli_error();
    }
    }
    
?>