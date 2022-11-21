<?php
    session_start();
    if($_SESSION['uname'] != null){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:#FAFAD2;">
    <center>
    <h1>
        Welcome to Home Page........
    </h1>
    <?php
        echo $_SESSION['uname'];
    ?>

    <a href = "logout.php"><button>logout</button></a> 
</body>
    </center>
</html>

<?php
    }
    else{
        header("Location:index.php");
    }
?>