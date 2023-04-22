<?php
SESSION_START();
?>
<!--Nav Bar -->
<nav id="mainNav" class="navbar fixed-top navbar-expand-lg navbar-dark shadow-5-strong ">
        <div class="container-fluid mx-3">
            <a class="navbar-brand" href="index.php">
                <img src="img/TRavel-Mate-logo-02-white.png" width="60px" alt="">
              </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse float-right" id="navbarNavAltMarkup">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="matchAGuide.php">Match A Guide</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item dropdown">
                        <!--<a class="btn btn-primary navbar-btn signUpBtn" href="#" role="button">Login / Sign Up</a> -->
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person-fill"></i> Profile </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                        
                        <?php if(isset($_SESSION["username"]))  { ?>
                        <p>Welcome <?php echo $_SESSION["username"] ?></p>
                        <a class="dropdown-item" href="userProfile.php">My account</a>
                        <a class="dropdown-item" href="chatlist.php">Messenger</a>
                        <a class="dropdown-item" href="logout.php">Log Out</a>

                        <?php } else { ?>
                            <a class="dropdown-item" href="login.php">Login</a>
                            <a class="dropdown-item" href="register.php">Register</a>
                        <?php } ?>
                        
                        </div>

                        
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>