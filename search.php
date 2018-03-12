<?php include 'includes/db.php'; ?>

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
<?php include 'partials/_header.php'; ?>
    <!-- Page Content -->
    <div class="container">
      <article class="row">
        <section class="col-lg-8">
          <?php
            if (isset($_GET['search_submit'])) {
              echo '
                <div class="card">
                  <div class="card-body"
                    <h4>You searched for "'.$_GET['search'].'"</h4>
                  </div>
                </div>
              ';

              $sel_sql = "SELECT * FROM news WHERE title LIKE '%$_GET[search]%' OR content LIKE '%$_GET[search]%'";
              $run_sql = mysqli_query($conn, $sel_sql);
              while ($rows = mysqli_fetch_assoc($run_sql)) {
                echo '
                  <div class="card" style="margin: 5px;">
                    <h2 class="card-header">'.$rows['title'].'</h2>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-4">
                          <img class="img-fluid rounded" src="'.$rows['image'].'" alt="" width="100%">
                        </div>
                          <div class="col-lg-8">
                            <p class="card-text">'.substr($rows['content'],0,250).'...</p>
                          </div>
                      </div>
                      <a href="news.php?news_id='.$rows['id'].'" class="btn btn-success pull-right">Read more</a>
                    </div>
                    <div class="card-footer pull-left"><i>posted: '.$rows['date'].'</i></div>
                  </div>';
              }
            }
          ?>
          
        </section>