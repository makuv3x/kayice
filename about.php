<?php 
session_start();
ob_start();
include 'includes/config.php';

echo $_SESSION['user'];
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

  </head>

  <body>

    <!-- Navigation -->
<?php include 'partials/_header.php' ?>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3" style="padding: 5px; border-width: 8px; border-color: #ccc; border-bottom-style: ridge; font-weight: 800; font-size: 35px;">About Us</h1>



      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="http://placehold.it/750x450" alt="">
        </div>
        <div class="col-lg-6">
          <h2 style="font-weight: 800; font-size: 35px;">Vision</h2>
          
              <p>• Our vision is to be a recognized learning center in providing excellent pre-school learning program, multiple intelligence program and tutorials.</p>
              <p>• Our vision for our learners is to develop and utilize their multiple intelligences which will help them distinguish their craft that will guide them in identifying their career path.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="http://placehold.it/750x450" alt="">
        </div>
        <div class="col-lg-6">
          <h2 style="font-weight: 800; font-size: 35px;">Mission</h2>
          <p>We will meet our vision through:</p>
          <p>• providing affordable quality education </p>
          <p>• a curriculum focused on developing and utilizing the multiple intelligences of the students </p>
          <p>• continual evaluation, improvement and quality assurance of the learning materials </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Team Members -->
      <h2 style="text-align: center; padding: 5px; border-width: 8px; border-color: #ccc; border-bottom-style: ridge; font-weight: 800; font-size: 35px;">Our Team</h2>

      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="http://placehold.it/750x450" alt="">
            <div class="card-body">
              <h4 class="card-title">Team Member</h4>
              <h6 class="card-subtitle mb-2 text-muted">Position</h6>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
            </div>
            <div class="card-footer">
              <a href="#">name@example.com</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="http://placehold.it/750x450" alt="">
            <div class="card-body">
              <h4 class="card-title">Team Member</h4>
              <h6 class="card-subtitle mb-2 text-muted">Position</h6>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
            </div>
            <div class="card-footer">
              <a href="#">name@example.com</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="http://placehold.it/750x450" alt="">
            <div class="card-body">
              <h4 class="card-title">Team Member</h4>
              <h6 class="card-subtitle mb-2 text-muted">Position</h6>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
            </div>
            <div class="card-footer">
              <a href="#">name@example.com</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Services Offered -->

      <h1 class="mt-4 mb-3" style="text-align: center; padding: 5px; border-width: 8px; border-color: #ccc; border-bottom-style: ridge; font-weight: 800; font-size: 35px;">Services Offered</h1>




      <!-- Image Header -->
      <img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt="">

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Card Title</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Card Title</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Card Title</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->


      <h1 class="mt-4 mb-3" style="text-align: center; padding: 5px; border-width: 8px; border-color: #ccc; border-bottom-style: ridge; font-weight: 800; font-size: 35px;">Executive Summary</h1>
      <p>The increasing population of person with Special needs (ASD, ADHD/ADD, GDD, LD, etc.) is quite noticeable yet the number of schools that can cater their needs is far from the ratio needed; thus <b>Kayice Haven of Knowledge Inc.</b> came to its light.</p>
      <p><b>Kayice Haven of Knowledge Inc. (KAHKI)</b> is a proposed regular and mainstreaming preschool which aims to provide an affordable quality education to all learners (regular and special pupils alike) ages 3-8 years old. The institution will offer excellent learning environment in line with Multiple Intelligences and K-12 program.</p>
      <p><b>Kayice Haven of Knowledge Inc.</b> (former Venice Home for Learning) started its operation summer of 2014 as a tutorial center with summer program in reading and basic math skills that caters pupils ages 2 ½ - 7 years old. </p>
      <p><b>KAHKI</b> used to be owned and managed by Michel P. Ascura. She decided and established this project for her daughter who was diagnosed with Autism Spectrum Disorder (ASD) and to the growing population of kids with disability. For the past years Mrs. Ascura thru Venice Home for Learning received a lot of inquiries from fellow parents, looking for appropriate school which can truly help in developing their child, she realized that she can do more than just tutorials. She want to extend help and reach out more special individual, to help them develop to their fullest potential just like the way she wants Venice to be- to be someone who has a fruitful and productive life, and subsequently to have a happy family of her own not just as someone who is a mere burden to their respective families. With this insight, Mrs. Ascura convince her family to help in her advocacy by opening not just regular but also mainstreaming preschool to accomodate regular and younger special kids, to provide their needs in terms of acadaemics, social and behavioral skills, and other intelligences that may be develop from the school environment.</p>

    </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
