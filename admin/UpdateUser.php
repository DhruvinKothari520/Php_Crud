<?php
    session_start();
    include_once'../db.php';
    if($_SESSION['uname'] != null && $_SESSION['uname']=='admin'){
        $id = $_GET['id'];
        $sql = "select * from user where Id = $id";
        //echo $sql;
        $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
            $data = mysqli_fetch_array($res);
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpdateUser</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body style="background-image:url('../img/images1.png' );background-repeat: no-repeat; background-size: cover">
    <div class="mt-5">
        <div class="row justify-content-center align-items-center" >
            <table class="table table-bordered w-50">
                <form role="form" method="post">
                    <tr>
                        <th colspan=2 class="text-center">Update Details</th>
                    </tr>

                    <tr>
                        <th>Name</th>
                        <td><input type="text" class="form-control" name="name" value="<?php echo $data['Name']; ?>"></td>
                    </tr>

                    <tr>
                        <th>Mobile</th>
                        <td><input type="text" class="form-control" name="mobile" value="<?php echo $data['Mobile']; ?>"></td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td><input type="email" class="form-control" name="email" value="<?php echo $data['Email']; ?>"></td>
                    </tr>

                    <tr>
                        <th>Password</th>
                        <td><input type="password" class="form-control" name="password" value="<?php echo $data['Password']; ?>"></td>
                    </tr>

                    <tr>
                        <td colspan=2 class="text-center">
                            <input type="submit" class="btn btn-outline-warning mr-5" value="Reset" name="reset">
                            <input type="submit" class="btn btn-outline-danger" value="Update" name="update">
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>

<?php
        if(isset($_POST['update'])){
             // echo $_POST['name'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $password = $_POST['password'];
            $sql = "Update user set Name = '$name', Email = '$email', Mobile = '$mobile', Password = '$password'  where Id = '$id'";
            //echo $sql;
            $res = mysqli_query($conn,$sql);
            if($res){
                //echo "<script>alert('Record Updated...')</script>";
                header("Location:User.php");
            }
            else{
                echo "<script>alert('Something went wrong...')</script>";
            }
         }
    }
    else{
        header("Location:index.php");
        exit();
    }
?>