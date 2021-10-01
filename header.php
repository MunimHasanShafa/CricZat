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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Series</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="#">News</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="#" onclick="window.location.replace('posts.php');">Posts</a>
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
                    
                    <ul class="navbar-nav mb-2 mb-lg-0">
                      <li class="nav-item">
                        <?php
                          if(isset($_SESSION['email'])){ 
                          ?>
                            <a name="login" class="nav-link active" href="login.php" >Login</a>
                          <?php
                          }else{
                            ?>
                            <a name="logout" href="logout.php" class="nav-link active">Logout</a>
                          <?php }
                        ?>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </section>