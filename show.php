<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "criczat";
  $conn = new mysqli($servername, $username, $password, $dbname);
    session_start();
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="show.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
        require 'header.php';
    ?>
    
    <div class="container">
        <div class="show-post-news">
                
                <?php
                $id = $_GET['id'];

                $sql = "SELECT title, name, text, image, date FROM features where featureId = $id";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                
                <div class="post-front-news">
                        
                            <div class="show-img-news"><img src="image/<?php echo $row["image"] ?>"></div>
                            <div class="feature-writer-news">
                            <p id="profile-title-news"><?php echo $row["title"] ?></p>
                            <p id="name"><?php echo $row["name"] ?></p>
                            <p id="date"><?php echo  $row["date"] ?></p>
                            <p id="text"><?php echo $row["text"] ?></p>
                            
                            </div>
                    </div>
                    </div>

                            
                            
                    
                <?php
                    }
                }
                ?>
    </div>

    <?php
        require "footer.php";
    ?>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>