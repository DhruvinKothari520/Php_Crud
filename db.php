<?php
    $conn = mysqli_connect("localhost","root","","php_crud");
    if($conn){
        echo "Connection Successfully...";
    }
    else{
        die("Try t again...");
    }
?>