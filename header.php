<section class="container" id="header-section">
        <div class="navigation-bar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand nav-icon" href="index.php">CricZat</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link active" href="posts.php" >Posts</a>
                        
                      </li>
                      <!-- <li class="nav-item">
                        <a class="nav-link active" href="#">Quiz</a>
                      </li> -->
                     
                    </ul>
                    
                    <ul class="navbar-nav mb-2 mb-lg-0">
                      <li class="nav-item">
                        <?php
                          if(isset($_SESSION['criczat_email'])){ 
                          ?>
                            <a class="nav-link active" href="logout.php" ><i style="font-size: 25px;" class="bi bi-box-arrow-right"></i></a>
                          <?php
                          }else{
                            ?>
                            <a href="login.php" class="nav-link active">Login</a>
                          <?php }
                        ?>
                        <?php //echo $_SESSION['firstName']?>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </section>

