
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <!--CSS -->
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    
    <!--title -->
    <title>Become A Member of Travel Mate</title>
    <link rel="shortcut icon" type="image/png" href="/img/TRavel-Mate-favicon.png">

</head>
<body>
<?php include 'navbar.php';
if(isset($_SESSION['email'])) { 
  header("location: index.php");
}
?>

	<!-- MAIN-->
<video class="img-fluid hover-to-stop" autoplay loop muted>
        <source src="img/about-us-vid.mp4" type="video/mp4" />
</video>


	
	<!--Sign Up Form-->
    <section class="smallSection" >
        <div class="container">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <h2 class="text-center smallHeadline my-3">Sign up</h2>
					           <p>Have an account? <span class="my-5"><a href="login.php">Login Here</a></span></p>
                        
                        <?php
                          if (isset( $_SESSION["regis_message"])) {
                            echo $_SESSION["regis_message"];
                          }
                        ?>

                      <form action="database.php" method="POST">
                        <input type="hidden" name="action" value="registration">
                        <div class="form-group my-2">
                            <label class="mb-2" for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Bob Dylan" name="name" required>
                        </div>
                        <div class="form-group my-2">
                          <label class="mb-2" for="inputEmail1">Email address</label>
                          <input type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp" name="email" placeholder="bobdylan@gmail.com" required>
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div> 
                        <div class="form-group my-2">
                          <label class="mb-2" for="inputPassword">Password</label>
                          <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" required> 
                          <i class="bi bi-eye"></i>
                        </div>
					            	<div class="form-group confirm my-2 ">
                          <label class="mb-2" for="inputConfirmPassword">Confirm Password</label>
                          <input type="password" class="form-control" id="inputConfirmPassword" placeholder="confirm password" name="confirm_password" required> 
                          <i class="bi bi-eye"></i>
                        </div>
                        <div class="form-check my-4">
                          <input type="radio" id="contactChoice1" name="userType" value="traveler" />
                          <label for="contactChoice1">Sign up as a traveler.</label> <br/>
                          <input type="radio" id="contactChoice2" name="userType" value="tourGuide" />
                          <label for="contactChoice2">Sign up as a tour guide.</label>
                        </div>
                        <button type="submit" class="btn btn-primary signUpBtn">Submit</button>
                      </form>
      
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
      
                      <img src="img/signup-image.png"
                        class="img-fluid" alt="Sample image">
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!--End Form-->

<!-- footer -->
<script src="assets/show-hide-pass.js"></script>
<?php include 'footer.php';
unset($_SESSION["regis_message"]);
?>
