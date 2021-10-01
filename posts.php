<?php
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    print_r($_POST);
  }
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="container" id="header-section">
        <div class="navigation-bar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand nav-icon" href="#">CricZat</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" onclick="window.location.replace('index.html');">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Series</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="#">News</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Posts</a>
                      </li>
                      <!-- <li class="nav-item">
                        <a class="nav-link active" href="#">Quiz</a>
                      </li> -->
                      <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          More
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Photo Gallery</a></li>
                          <li><a class="dropdown-item" href="#">Rankings</a></li>
                          <li><a class="dropdown-item" href="#">Stats</a></li>
                          <li><a class="dropdown-item" href="#">Teams</a></li>
                          
                        </ul>
                      </li>
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search by players, teams.." aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" href="#" onclick="window.location.replace('login.html');"><i class="bi bi-person-circle">Login</i></span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </section>

    <section class="container">
        <div class="button-group">
            <button id="button-1" onclick='postNow()'>Post Now</button>
            <button id="button-2" onclick='userPost()'>Your Posts</button>
            <button id="button-3" onclick='features()'>Featured Posts</button>
            <button id="button-4" onclick='allPosts()'>All Posts</button>
            
        </div><br>
    </section>

    <section class="container post-main">
      <div class="post-section" id="post-box">
        <form action="status.php" method="post">
          <textarea name="post_text" id="textarea" rows="3" placeholder="Tell us what you are thinking..."></textarea><br>
          <button id="post-button" type="submit" class="btn btn-success button" value="Post">Post Now</button>
          
        </form>
      </div>

    </section>
    <!-- <div class="container post-main">
      <div class="">
        <div class="posts-1">
          <textarea name="" id="textarea" rows="3"></textarea>
          <button type="submit" id="post-now-btn">POST NOW</button>
        </div>
      </div>
    </div> -->

    <section class="container post-main">
        <ul class="posts">
            <li>
                <div class="post-body">
                    <div>
                      
                       
                      <p id="post-giver">Fahim Hossain Ani</p>
                      
                      <div class="posts-section">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni odio nobis, quae rerum iusto repudiandae. Animi, deserunt accusantium ipsam nostrum hic dolore beatae eum, consectetur alias quasi dolorum natus iste pariatur omnis aspernatur odio quidem impedit reprehenderit soluta. Placeat velit possimus optio laboriosam debitis dolore consequuntur expedita totam sit distinctio.</p>
                      </div>
                    </div>
                  </div>
            </li>
        </ul>
    </section>



    




    <script>
      document.getElementById('post-box').style.display = "none";
        function postNow(){
          
            document.getElementById("button-1").style.backgroundColor = "rgb(58, 58, 58)";
            document.getElementById("button-1").style.color = "white";
            document.getElementById("button-2").style.backgroundColor = "white";
            document.getElementById("button-2").style.color = "black";
            document.getElementById("button-3").style.backgroundColor = "white";
            document.getElementById("button-3").style.color = "black";
            document.getElementById("button-4").style.backgroundColor = "white";
            document.getElementById("button-4").style.color = "black";
            document.getElementById('post-box').style.display = "block";
        }
        function userPost(){
            document.getElementById("button-1").style.backgroundColor = "white";
            document.getElementById("button-1").style.color = "black";
            document.getElementById("button-2").style.backgroundColor = "rgb(58, 58, 58)";
            document.getElementById("button-2").style.color = "white";
            document.getElementById("button-3").style.backgroundColor = "white";
            document.getElementById("button-3").style.color = "black";
            document.getElementById("button-4").style.backgroundColor = "white";
            document.getElementById("button-4").style.color = "black";
        }
        function features(){
            document.getElementById("button-1").style.backgroundColor = "white";
            document.getElementById("button-1").style.color = "black";
            document.getElementById("button-2").style.backgroundColor = "white";
            document.getElementById("button-2").style.color = "black";
            document.getElementById("button-3").style.backgroundColor = "rgb(58, 58, 58)";
            document.getElementById("button-3").style.color = "white";
            document.getElementById("button-4").style.backgroundColor = "white";
            document.getElementById("button-4").style.color = "black";
        }
        function allPosts(){
            document.getElementById("button-1").style.backgroundColor = "white";
            document.getElementById("button-1").style.color = "black";
            document.getElementById("button-2").style.backgroundColor = "white";
            document.getElementById("button-2").style.color = "black";
            document.getElementById("button-3").style.backgroundColor = "white";
            document.getElementById("button-3").style.color = "black";
            document.getElementById("button-4").style.backgroundColor = "rgb(58, 58, 58)";
            document.getElementById("button-4").style.color = "white";
        }

          
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>