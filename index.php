<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "criczat";
  $conn = new mysqli($servername, $username, $password, $dbname);
  session_start();
  
  $_SESSION['criczat_email']
  

  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CricZat</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php
      require 'header.php';
    ?>

    <section class="container live-score">
     
      <iframe src="https://bwidget.crictimes.org/" style="width:100%;min-height: 250px;" frameborder="0" scrolling="yes"></iframe>
    </section>

    <section class="container main-body">
      <div class="row">
        <div class="col-7">
          <h3>Featured Post</h3>
          <div class="post-front">
            <div class="show-img">
              <img class="w-100 news-front-img" src="logos/frontpost.jpg" alt="">
            </div>
            <div class="identity d-flex align-items-center">
              <img class="profile-img" src="logos/profile.png" alt="">
              <div class="profile-title">
                <h4>Posts Title</h4>
              <h3>Post Giver Name</h3>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-5 news-front">
          <h3>News</h3>
          <div class="news-body">
            <div>
              <img src="logos/frontpost.jpg" alt="">
            </div>
            <div class="news-title">
              <h4>This is news title</h4>
              <p>Time yy/mm/dd</p>
              
            </div>
          </div>
        </div> -->
        <div class="col-5 news-front">
          <h3>News</h3>
        <?php
          $sql = "SELECT * FROM news";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
          ?>
          
          <div class="news-body">
                  <div class="col-5 news-front">
                    <div class="image-holder"><img src="image/<?php echo $row["image"] ?>"></div>
                      <div class="news-title"><h3><?php echo $row["title"] ?></h3>
                      <p><?php echo $row["text"] ?></p>
                      <p><?php echo $row["date"] ?></p>
                    </div>
              </div>
              </div>

                      
                      
                  </div>
          <?php
              }
          }
        ?>
      </div>
    </section>

    
      <?php
        require 'footer.php';
      ?>
   

    <script>
      var login = false;
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>