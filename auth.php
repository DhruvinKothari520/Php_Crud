<?php
    session_start();
    include_once 'db.php';

    if(isset($_POST['submit'])){
        $uname= $_POST['uname'];
        $password = $_POST['password'];

        // if($uname == "admin" && $password == "admin"){
        //     $_SESSION['uname'] = $_POST['uname'];
        //     header("Location: home.php");

        // }
        // else{
        //     header("Location: index.php?error= Incorrect username and password");
        // }

        if($_POST['uname'] == "admin" && $_POST['password'] == "admin"){
            $_SESSION['uname'] = $_POST['uname'];
            header("Location:admin/User.php");
        }
        else{
            $sql = "select * from user where Email = '".$_POST['uname']."' and password = '".$_POST['password']."'";
            $res = mysqli_query($conn,$sql);
            if(mysqli_num_rows($res)>0){
                $data = mysqli_fetch_array($res);
                $_SESSION['id'] = $data['id'];
                $_SESSION['uname'] = $data['Name'];
                $_SESSION['email'] = $data['Email'];
                $_SESSION['mobile'] = $data['Mobile'];
                //  $_COOKIE('nm',"Dhruvin Kothari",time() + (5), "/");
                if(isset($_POST['remember'])){
                    setcookie("nm",$data['Email'],time()+(5),"/");
                    setcookie("pss",$data['Password'],time()+(5),"/");
                }
                header("Location:home.php");
            }
            else{
                header("Location:index.php?error=Incoorrect Username and Password");
            }
        }
    }

?>