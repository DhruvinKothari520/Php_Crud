<?php
    session_start();
    if(isset($_POST['submit'])){
        $uname= $_POST['uname'];
        $password = $_POST['password'];

        if($uname == "admin" && $password == "admin"){
            $_SESSION['uname'] = $_POST['uname'];
            header("Location: home.php");

        }
        else{
            header("Location: index.php?error= Incorrect username and password");
        }
    }
?>