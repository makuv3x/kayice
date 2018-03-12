<?php
session_start();
ob_start();
include 'includes/config.php';

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
   <!--  <link href="css/css/fontawesome.min.css" rel="stylesheet"> -->
    <link href="css/css/fontawesome-all.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
<?php include 'partials/_header.php' ?>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3" style="text-align: center; padding: 5px; border-width: 8px; border-color: #ccc; border-bottom-style: ridge; font-weight: 800; font-size: 35px;">Contact Us</h1>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <div id="map" style="width:100%;height:400px;"></div>

            <script>
              function initMap () {
                  var location = {lat: 14.4202211, lng: 120.926593};
                  var map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 16, 
                    center: location
                  });
                  var marker = new google.maps.Marker({
                    position: location,
                    map: map
                  });
                }
            </script>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDU2nPDxfjFl6SB6Fyt8cN6tcNqYy_qctU&callback=initMap"></script>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Contact Details</h3>
          <p><span class="fa fa-map-marker"></span>
            Blk 21, Lot 37 & 39(in front of Club House),<br>
            Phase B, Legian II,<br>
            Carsadang Bago II, Imus, Cavite 4103
          </p>
          <p><span class="fa fa-phone"></span>
             (123) 456-7890
          </p>
          <p><span class="fa fa-envelope"></span>
            <a href="mailto:kayice_hki@yahoo.com">kayice_hki@yahoo.com
            </a>
          </p>
          <p><span class="fa fa-hourglass-start"></span>
            Monday - Friday: 9:00 AM to 5:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3 style="text-align: center; padding: 5px; border-width: 8px; border-color: #ccc; border-bottom-style: ridge; font-weight: 800; font-size: 35px;">Send us a Message</h3>

            <!-- <form role="form" method="POST" action="contact.exe.php">
            	<div class="form-group">
            		<label for="name" class="control-label col-lg-4">Full Name</label>
            		<div class="col-lg-12">
            			<input type="text" name="name" class="form-control" placeholder="Enter your Full Name" required>
            		</div>
            	</div>
              <div class="form-group">
                <label for="email" class="control-label col-lg-4">E-mail Address</label>
                <div class="col-lg-12">
                  <input type="email" name="email" class="form-control" placeholder="Enter your Email Address" required>
                </div>
              </div>
              <div class="form-group">
                <label for="subject" class="control-label col-lg-4">Subject</label>
                <div class="col-lg-12">
                  <input type="text" name="subject" class="form-control" placeholder="Add your Subject" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-4">Message</label>
                <div class="col-lg-12">
                  <textarea class="form-control" rows="10" name="message" style="resize: none;" placeholder="Enter your Massage here..." required></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-4"></label>
                <div class="col-lg-12">
                  <input type="submit" class="btn btn-block btn-success" name="sumbitForm" value="Submit">
                </div>
              </div>
            </form> -->
            <form action="contact.exe.php" method="POST">
              <input type="text" name="name" placeholder="Full Name">  <br>
              <input type="text" name="email" placeholder="Email"><br>
              <input type="text" name="subject" placeholder="Subject"><br>
              <input type="text" name="message" placeholder="Your Message"><br>
              

              <button style="font-size:24px" type="submit" name="submit">SUBMIT&nbsp&nbsp<i class="fa fa-plane"></i></button>
            </form>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-3 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

  </body>

</html>
