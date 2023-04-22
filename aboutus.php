
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
    <title>About Travel Mate</title>
    <link rel="shortcut icon" type="image/png" href="/img/TRavel-Mate-favicon.png">

</head>
<body>
<!-- nav bar -->
<?php include 'navbar.php';?>

<!-- MAIN-->
<div class="parallax">
<div class="d-flex justify-content-center align-items-center h-100 position-relative" style="z-index: 1003 !important;">
                <div class="text-white">
                    
                    <h1 class="kerningHeading">OUR MOTIVATION</h1>
                </div>
            </div>
</div>


<div class="container" style="margin: 5% auto;">
    <p class="paragraphBlock" >
    <b class="mb-2">Welcome to Travel Mate! </b> <br> 
    We are a travel app designed to help solo travelers connect with locals and explore new cultures. 
    Our mission is to make travel more than just sightseeing; we want to create an opportunity for travelers to make meaningful connections 
    and experience destinations through the eyes of locals. <br>
    By providing a platform for travelers and locals to connect and communicate, 
    we hope to foster cultural exchange and help people broaden their perspectives. 
    </p>
</div>

<div class="parallax2"></div>

<div class="container" style="margin: 5% auto;">
    <p class="paragraphBlock" >
    With Travel Mate, you can make new friends, 
    learn about different cultures, and create unforgettable memories. 
    Join us on this journey of discovery and let's explore the world together!
    </p>
    <?php if(!isset($_SESSION["username"]))  { ?>
    <center>
    <a href="register.php" class="btn btn-primary signUpBtn my-3">SIGN UP TODAY</a>
    </center>
    <?php } ?>
</div>
 
<div class="parallax"></div>
 <!-- footer -->
 <?php include 'footer.php';?>