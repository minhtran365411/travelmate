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
    <title>Travel Mate Homepage</title>
    <link rel="shortcut icon" type="image/png" href="/img/TRavel-Mate-favicon.png">

</head>
<body>
<?php include 'navbar.php';?>

    <!-- Hero -->
    <div class="p-5 text-center hero bg-image mask">
            <div class="d-flex justify-content-center align-items-center h-100 position-relative" style="z-index: 1005 !important;">
                <div class="text-white">
                    
                    <h4 class="mb-5" style="font-weight: 300;">Have you ever wished
                        that you will have a friendly, like-minded, local tour guide
                        whenever you explore a new destination?
                        </h4>
                    <h1 class="mb-5">Travel Mate makes your dream come true.</h1>
                    <a class="btn btn-outline-light btn-lg" href="#section2" role="button">Explore</a>
                </div>
            </div>
    </div>
    <!-- Hero END -->


    <!-- CARD SECTION -->
    <div id="section2">
        <div>
            <h1 class="headline">Connect with your tour guide within 3 steps.</h1>
            <div class="row sectionRow">
                <div class="col-md-4 px-4 mb-4">
          
                  <div class="view"> 
                    <img src="./img/signup.gif" alt="" class="img-fluid">
                    <div class="cardBody">
                        <h5 class="cardTitle my-3">Sign Up</h5>
                        <p>Easy sign up, connect right away with like-minded people for your upcoming trip!</p>
                      </div>  
                </div>
                </div>

               <div class="col-md-4 px-4 mb-4">
          
                  <div class="view">
                    <img src="./img/match.gif" alt="" class="img-fluid">
                    <div class="cardBody">
                        <h5 class="cardTitle my-3">Match Your Tour Guide</h5>
                        <p>Read their profile and request to connect with tour guides you want to be friends with. </p>
                      </div> 
                </div>
          
                </div>

                <div class="col-md-4 px-4 mb-4">
          
                  <div class="view">
                    <img src="./img/connect.gif" alt="" class="img-fluid">
                    <div class="cardBody">
                        <h5 class="cardTitle my-3">Connect</h5>
                        <p>After your tour guide accept the connection, you can get to know each other and plan about your exploration together!</p>
                      </div>   
                </div>
          
                </div>
              </div>
        </div>
    </div>

    <!-- CARD SECTION END -->

    <!--MANSORY GALLERY-->
    <div class="grid">
        <div class="item" style="background-image: url(./img/pic1.JPG)"></div>
        
        <div class="item" style="background-image: url(./img/pic2.JPG)"></div>
        
        <div class="item" style="background-image: url(./img/pic3.JPG)"></div>
        
        <div class="item" style="background-image: url(./img/pic4.JPG)"></div>
        
        <div class="item" style="background-image: url(./img/pic5.JPG)"></div>
      </div>
    <!--MANSORY GALLERY-->

    <!--MWhy Travel Mate-->

      <!--Make a row here: maybe 4-8-->
      <div class="container my-5" style="margin-top: 7% !important;">
      <div class="row ">
        <div class="col-md-1"></div>
        <div class="col-md-4 d-flex align-items-center">
            <div class="view">
                <img src="img/Logo-Animation_final.gif" alt="Animation Travel Mate Logo" class="img-fluid">
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 d-flex align-items-center">
            <div>
          
                <h3 class="font-weight-bold mb-4 smallHeadline">Bond A Meaningful Friendship While Traveling</h3>
                <p>Travelling becoming much more meaningful and wholesome with a local tour guide, who knows all about the best places to visit, the coffee shop in the corner with the best pastries, or million must-try restaurants!</p>
                
                <div class="row mt-5">
                    <div class="col-2 d-flex justify-content-center">
                        <img class="img-fluid" src="img/smile-icon.gif" alt="">
                    </div>
                    <div class="col-9">
                        <h5 class="smallHeadline">Easy set up</h5>
                        <p>By just signing up and answering a few questions, you are all set and ready for the search of your next tour guide!</p>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-2 d-flex justify-content-center">
                        <img class="img-fluid" src="img/schedule-icon.gif" alt="">
                    </div>
                    <div class="col-9">
                        <h5 class="smallHeadline">Plan your meet up</h5>
                        <p>Matching, chatting and planning your next journey with your new friend/tour guide.</p>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-2 d-flex justify-content-center">
                        <img class="img-fluid" src="img/connect-icon.gif" alt="">
                    </div>
                    <div class="col-9">
                        <h5 class="smallHeadline">Connect with a like-minded soul</h5>
                        <p>Finally meet up in person, go explore the world and bond a meaningful friendship.</p>
                    </div>
                </div>
      
              </div>
        </div>
      </div>
    </div>      
    <!--END Why Travel Mate-->
    <?php if(!isset($_SESSION["username"]))  { ?>
    <hr>
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

                      <form action="register.php" method="POST">
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
                        </div>
						<div class="form-group my-2">
                          <label class="mb-2" for="inputConfirmPassword">Confirm Password</label>
                          <input type="password" class="form-control" id="inputConfirmPassword" placeholder="confirm password" name="confirm_password" required> 
                        </div>
      
                        <div class="form-check mt-4 mb-2">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked name="userType" value="traveler">
                          <label class="form-check-label" for="flexRadioDefault1">
                          Sign up as a traveler.
                          </label>
                        </div>
                        <div class="form-check mb-4">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" name="userType" value="tourGuide">
                          <label class="form-check-label" for="flexRadioDefault2">
                          Sign up as a tour guide.
                          </label>
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
    <?php } ?>

   <!-- footer -->
   <?php include 'footer.php';?>