<?php 
session_start();
ob_start();
include 'includes/config.php';
include 'includes/db.php'; 
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

<?php include 'partials/_header.php' ?>    
<div style="height: 50px;"></div>

      <div id="demo" class="container carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/la.jpg" alt="Los Angeles" height="480" width="100%">
          </div>
          <div class="carousel-item">
            <img src="images/chicago.jpg" alt="Chicago" height="480" width="100%">
          </div>
          <div class="carousel-item">
            <img src="images/ny.jpg" alt="New York" height="480" width="100%">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>

      </div>


    <!-- Page Content -->
    <div class="container" style="text-align: center; padding: 5px; border-width: 8px; border-color: #ccc; border-bottom-style: ridge; font-weight: 800; font-size: 35px;">
        <div class="jumbotron">
          <h1 class="my-4" style="text-align: center; font-weight: 800; font-size: 50px;">Welcome to<br>Kayice Haven of Knowledge Inc.</h1>
        </div>
    </div>
      <!-- News Post -->
    <div class="container">
      <article class="row">
        <section class="col-lg-8">
          <h2 style="font-weight: 800; font-size: 35px; padding: 20px 0px;">News & Announcements</h2>
          <?php
            $sel_sql = "SELECT * FROM news ORDER BY id DESC";
            $run_sql = mysqli_query($conn, $sel_sql);
            while ($rows = mysqli_fetch_assoc($run_sql)) {
              echo '
                <div class="card" style="margin: 5px;">
                  <h2 class="card-header"><a href="news.php?news_id='.$rows['id'].'">'.$rows['title'].'</a></h2>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-4">
                        <img class="img-fluid rounded" src="'.$rows['image'].'" alt="" width="100%">
                      </div>
                        <div class="col-lg-8">
                          <p class="card-text">'.substr($rows['content'],0,250).'...</p>
                        </div>
                    </div>
                    <a href="news.php?news_id='.$rows['id'].'" class="btn btn-success float-right">Read more</a>
                  </div>
                  <div class="card-footer pull-left"><i>posted: '.$rows['date'].'</i></div>
                </div>';
            }
          ?>
          
        </section>
        <aside class="col-lg-4" style="padding-top: 20px;">
          <form class="card-group form-horizontal" role="form" style="padding: 3px;" action="#">
            <div class="card">
              <div class="card-title">
                  <h4 class="card-header">Search</h4>
                </div>
              <div class="card-body">
                
                <div class="input-group">
                  <input type="search" class="form-control" placeholder="Search something">
                  <div class="input-group-btn">
                    <button class="btn btn-success" name="search_submit" type="submit"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </form>

              <h2 style="font-weight: 800; font-size: 35px; padding: 20px 10px;">Events</h2>

              <?php
                $sel_side = "SELECT * FROM events";
                $run_side = mysqli_query($conn, $sel_side);
                while ($rows = mysqli_fetch_assoc($run_side)) {
                  echo '
              <div class=" card list-group" style="padding: 5px;">
                <a href="#" class="list-group-item" style="margin: 5px;">
                  <h4 class="card-header list-group-item-heading">'.$rows['e_title'].'</h4></a>
                  <p class="card-body list-group-item-text">'.substr($rows['e_content'], 0,100).'...</p>
                
              <div class="card-footer">
                <a href="events.php?events_id='.$rows['e_id'].'" class="btn btn-success float-right">Read more</a>
              </div>
              </div>';
                  }
              ?>
          
        </aside>
      </article>
    </div> 

    <!-- Footer -->
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