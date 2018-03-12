<?php 
      session_start();
      ob_start();
      include 'includes/db.php';
      include 'comment_inc.php';
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
<?php include 'partials/_header.php' ?>

  <article class="row">
        <section class="col-lg-10 offset-lg-1">
          <?php
            $sel_sql = "SELECT * FROM news WHERE id = '$_GET[news_id]'";
            $run_sql = mysqli_query($conn, $sel_sql);
            while ($rows = mysqli_fetch_assoc($run_sql)) {
              echo '
                <div class="card" style="margin: 8px;">
                  <div class="card-body">
                    <div class="card-title">
                      <h2>'.$rows['title'].'</h2>
                    </div>
                    <img class="img-fluid rounded" src="'.$rows['image'].'" alt="" width="100%">
                    <p class="card-text" style="text-indent: 1.5em; margin-top: 0">';
              echo nl2br($rows['content']); 
              echo '</p>
                  </div>
                  <div class="card-footer pull-left"><i>posted: '.$rows['date'].'</i></div>
                </div>
              ';
            }
          ?>
          <?php include 'comments.php' ?>
        </section>


  </article>