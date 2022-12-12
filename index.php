<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login Page</title>
</head>
<body>
  
    <section class="vh-100" style="background-color: rgb(251, 172, 184);">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              
              <form method="post" action="auth.php">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center" style="background-color: azure;">
      
                  <h3 class="mb-5">Sign in</h3>
                <?php
                  if(isset($_GET['error'])){
                    echo "<p style ='color:red'><b>".$_GET['error']."</b></p>"; 
                  }
                ?>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="typeEmailX-2"><b>Email  Address</b></label>
                    <input type="text " name="uname"  class="form-control form-control-lg" value="<?php echo isset($_COOKIE['nm'])? $_COOKIE['nm']:""; ?>" />
                  </div>
      
                  <div class="form-outline mb-4">
                    <label class="form-label" for="typePasswordX-2"><b>Password</b></label>
                    <input type="password" name="password"  class="form-control form-control-lg" value="<?php echo isset($_COOKIE['pss'])? $_COOKIE['pss']:""; ?>" />
                  </div>
      
                  <!-- Checkbox -->
                  <div class="form-check d-flex justify-content-start mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" name="remember" checked />
                    <label class="form-check-label">Remember password </label>
                  </div>
      
                  <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Login</button> 
                   
                </div>
              </div>
              </form> 
            </div>
          </div>
        </div>
      </section>
</body>
</html>