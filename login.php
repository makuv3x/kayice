<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kayice Haven of Knowledge Inc.</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/css/fontawesome-all.min.css">

  </head>

  <body>

    <p><br><br></p>
  <div class="container">
     <div class="row">
       <div class="col-md-4"></div>
        
       <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-body">
            <form class="card-group" method="POST">
              <div class="card" style="margin: 5px">
                <h2 class="card-header" style="text-align: center;">LOGIN</h2>
                <div class="card-body">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username">                 
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" >                 
                  </div>
                    <input type="submit" value="Login" name="btn_login" class="btn btn-success btn-block" >
                    <p>Don't have account? <a href="registration.php">Click here!</a></p>
                </div>
              </div>
            </form>
            </div>
         </div>
         <div class="col-md-4"></div>
     </div>
  </div>
</div>

<?php
        include "includes/config.php";
        if(isset($_POST['btn_login']))
        { 
            $username = mysqli_real_escape_string($con, $_POST['username']);
            $password = mysqli_real_escape_string($con, $_POST['password']);


            $admin = mysqli_query($con, "SELECT * from tbl_admin where username = '$username' and password = '$password' and accounttype = 'Administrator' ");
            $numrow = mysqli_num_rows($admin);

            $member = mysqli_query($con, "SELECT * from tbl_member where username = '$username'");
            $numrow1 = mysqli_num_rows($member);

            

            if($numrow > 0)
            {
                while($row = mysqli_fetch_array($admin)){
                  $_SESSION['role'] = "Administrator";
                  $_SESSION['userid'] = $row['id'];
                }    
                header ('location: admin1/pages/index.php');
            }
            elseif($numrow1 > 0)
                {
                  while($row = mysqli_fetch_array($member)){

                    $hashedPwdCheck = password_verify($password, $row['password']);
                    if ($hashedPwdCheck == false) {
                      echo "<script>
                        alert ('Username or Password are incorrect');
                      </script>";
                      exit();
                    } elseif ($hashedPwdCheck == true) {
                        $_SESSION['role'] = "Member";
                        $_SESSION['userid'] = $row['id'];
                    }
                    header ('location: index1.php');
                  } 
                  
                }
             else
                {
                  echo 'invalid account';
                }
             
        }
        
      ?>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>