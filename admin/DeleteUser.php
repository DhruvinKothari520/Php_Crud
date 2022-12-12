<?php
    session_start();
    if($_SESSION['uname'] != null && $_SESSION['uname']=='admin'){
        include_once '../db.php';
        $id = $_GET['id'];
        $sql = "Delete from user where Id = $id";
        // echo $sql;
        $res = mysqli_query($conn,$sql);
        if($res){
            header("Location:User.php");
        }
        else{
            echo "<script>alert('Something went wrong...!!')</script>";
        }
    }
    else{
        header("Location:../index.php");
        exit();
    }
    
?>