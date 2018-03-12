<?php 
session_start();
ob_start();
include 'includes/db.php'; ?>

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

<?php include 'partials/_header.php' ?>

  <article class="row">
        <section class="col-lg-10 offset-lg-1">
          <?php
            $sel_side = "SELECT * FROM events WHERE e_id = '$_GET[events_id]'";
            $run_side = mysqli_query($conn, $sel_side);
            while ($rows = mysqli_fetch_assoc($run_side)) {
              echo '
                <div class="card" style="margin: 8px;">
                  <div class="card-body">
                    <div class="card-title">
                      <h2>'.$rows['e_title'].'</h2>
                    </div>
                    <p class="card-text">'.$rows['e_content'].'</p>
                  </div>
                </div>
              ';
            }
          ?>
          
        </section>
  </article>