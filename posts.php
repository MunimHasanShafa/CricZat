<?php
  session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="posts.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
      require 'header.php';
    ?>

    <section class="container">
        <div class="button-group">
            <form action="" method="post">
              <button name="post_now" id="button-1" onclick='postNow()'>Post Now</button>
            </form>
            <form action="" method="post">
              <button name="your_posts" id="button-2" onclick='userPost()'>Your Posts</button>
            </form>
            <form action="" method="post">
              <button name="all_posts" id="button-4" onclick='allPosts()'>All Posts</button>
            </form>
            
        </div><br>
    </section>

    <section class="container post-main">
      <div class="post-section" id="post-box">
      
         

          <form method="post" action="status.php">
					
					<textarea  name="message" id="textarea" rows="3" placeholder="Tell us what you are thinking..."></textarea>
					<input name="post_now" id="post_button" type="submit" value="POST NOW" class="contact-in-btn">
				</form>
          
        
      </div>

    </section>
   
    
      <?php
        
          
        

        $email = $_SESSION['criczat_email'];
        
        if(isset($_POST['all_posts'])){
          $con = mysqli_connect('localhost', 'root', '');
          mysqli_select_db($con, 'criczat');
          $query = "select userTable.firstName, userTable.lastName, posts.text, posts.date from posts inner join userTable on posts.email = userTable.email order by postid desc";
        }
        if(isset($_POST['your_posts'])){
          if(isset($_SESSION['criczat_email'])){
              $con = mysqli_connect('localhost', 'root', '');
              mysqli_select_db($con, 'criczat');
              $query = "select userTable.firstName, userTable.lastName, posts.text, posts.date from posts inner join userTable on userTable.email= '$email' and posts.email= '$email' order by postid desc";
          }else{
            echo '<script>alert("You have not logged in yet. Please log in to share your thoughts!!")</script>';
  
          }
        }
        if(!isset($email)){
          
            echo '<script>alert("You have not logged in yet. Please log in to share your thoughts!!")</script>';
          
        }
        
        
        
        
        $query_run = mysqli_query($con,$query) or die(mysqli_error($con));
        $check_about_us = mysqli_num_rows($query_run)>0;
        if($check_about_us){
          while ($row = mysqli_fetch_array($query_run)) {
    ?>
    <section class="container post-main">
        <ul class="posts">
            <li>
                <div class="post-body">
                    <div>

                      <p id="post-giver"><?php echo $row['firstName']." ".$row['lastName']; ?></p>
                      <p><?php echo $row['date']; ?></p>
                      
                      <div class="posts-section">
                        <p><?php echo $row['text']; ?></p>
                      </div>
                      
                    </div>
                  </div>
            </li>
        </ul>
    </section>

    <?php
              }
            }else{
              echo '<script>alert("Data Not Found")</script>';
            }
           ?>

      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <?php
        require 'footer.php';
      ?>



    




    <script>
      document.getElementById('post-box').style.display = "none";
        function postNow(){
          
        //     document.getElementById("button-1").style.backgroundColor = "rgb(58, 58, 58)";
        //     document.getElementById("button-1").style.color = "white";
        //     document.getElementById("button-2").style.backgroundColor = "white";
        //     document.getElementById("button-2").style.color = "black";
                document.getElementById('post-box').style.display = "block";
        //     document.getElementById("button-4").style.backgroundColor = "white";
        //     document.getElementById("button-4").style.color = "black";
        //     document.getElementById('post-box').style.display = "block";
        }
        // function userPost(){
        // //     document.getElementById("button-1").style.backgroundColor = "white";
        // //     document.getElementById("button-1").style.color = "black";
        // //     document.getElementById("button-2").style.backgroundColor = "rgb(58, 58, 58)";
        // //     document.getElementById("button-2").style.color = "white";
            
        // //     document.getElementById("button-4").style.backgroundColor = "white";
        // //     document.getElementById("button-4").style.color = "black";
        //      document.getElementById('post-box').style.display = "none";
            
            
        // }
        // // function features(){
        // //     document.getElementById("button-1").style.backgroundColor = "white";
        // //     document.getElementById("button-1").style.color = "black";
        // //     document.getElementById("button-2").style.backgroundColor = "white";
        // //     document.getElementById("button-2").style.color = "black";
        // //     document.getElementById("button-3").style.backgroundColor = "rgb(58, 58, 58)";
        // //     document.getElementById("button-3").style.color = "white";
        // //     document.getElementById("button-4").style.backgroundColor = "white";
        // //     document.getElementById("button-4").style.color = "black";
        // // }
        // function allPosts(){
        //     document.getElementById("button-1").style.backgroundColor = "white";
        //     document.getElementById("button-1").style.color = "black";
        //     document.getElementById("button-2").style.backgroundColor = "white";
        //     document.getElementById("button-2").style.color = "black";
            
        //     document.getElementById("button-4").style.backgroundColor = "rgb(58, 58, 58)";
        //     document.getElementById("button-4").style.color = "white";
        //     document.getElementById('post-box').style.display = "none";
            
        // }

          
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>