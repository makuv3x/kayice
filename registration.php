<?php include 'includes/config.php';
date_default_timezone_set('Asia/Manila'); ?>

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

<?php include 'partials/_header.php' ?>    
<div style="height: 50px;"></div>

  <div class="container">
     <div class="row">
       <div class="col-md-3"></div>
        
       <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-body">

            <form class="card-group" method="post">
              <div class="card" style="margin: 5px">
                <h2 class="card-header" style="text-align: center;">REGISTER</h2>
                <div class="card-body">
                  <div class="form-group">
                    <label>Full Name</label>
                    <input type="name" class="form-control" name="name" >                 
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username">                 
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" >                 
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" >                 
                  </div>
                    <input type="submit" value="Register" name="btn_register" class="btn btn-success btn-block" >
                </div>
              </div>
            </form>
          </div>
         </div>

         <div class="col-md-3"></div>
     </div>
  </div>
</div>
<?php
  if(isset($_POST['btn_register'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $chk = mysqli_query($con, "SELECT * FROM tbl_member WHERE name = '".$name."' AND username = '".$username."' AND email = '".$email."'");
    $ct = mysqli_num_rows($chk);
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    if ($ct == 0) {
      $query = mysqli_query($con, "INSERT INTO tbl_member (name, username, email, password) VALUES ('".$name."', '".$username."', '".$email."', '".$hashedPwd."')" );
      if ($query == true) {
        $_SESSION['added'] = 1;
        header("Location: ".$_SERVER['REQUEST_URI']);
      }
    } else {
      $_SESSION['duplicate'] = 1;
      header("Location: ".$_SERVER['REQUEST_URI']);
    }
  }


?>

<footer class="bg-dark">
    <address class="text-white">
      <strong>Kayice Haven Of Knowledge Inc.</strong><br>
      Blk 1 lot 39 Legian 2-B, 1, Imus City, Cavite<br>
      <abbr title="Phone">P:</abbr> (123) 456-789
    </address>

    <div class="footer-bottom bg-success">
      <div class="container">
          <p class="m-0 text-center text-white">Copyright © <?php echo date("Y"); ?> Kayice Haven Of Knowledge Inc. All rights reserved.</p>
      </div>
    </div>
  </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>