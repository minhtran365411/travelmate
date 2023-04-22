<?php

// Include the database configuration file
include 'dbConfig.php';

// Create database connection
$connection = new mysqli($server, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
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
    <title>Match A Guide</title>
    <link rel="shortcut icon" type="image/png" href="/img/TRavel-Mate-favicon.png">

</head>
<body>
<?php include 'navbar.php';?>

<div class="wrapper">
  <div class="shadow"></div>
  <h1 class="kerningHeading" id="matchHeadline">MATCH A GUIDE</h1>
  
</div>

    <!-- Hero -->
    <div id="sectionTourGuideCard" class="container">
        <h1 class="headline">Find A Tour Guide For You</h1>
    <div class="row mt-4">
    <?php
    // Get users from the database
              if(isset($_SESSION["username"]))  {
                $this_user = $_SESSION['email'];
                } else {
                    $this_user = "nobody";
                }
                $query = $connection->query("SELECT * FROM users WHERE NOT email = '$this_user' AND userType = 'tourGuide' ORDER BY name DESC");

                if($query->num_rows > 0){
                    while($row = $query->fetch_assoc()){
                        $imagePath = $row['image_path'];
                        $country = $row['country'];
                        $name = $row['name'];
                        $email = $row['email'];

                ?>
        <div class="col-sm-6 col-md-4 col-lg-3 item">
        <div class="cardProfile p-0">
                    <div class="card-image">
                        <img src="<?php echo $imagePath; ?>" alt="">
                    </div>
                    <div class="card-content d-flex flex-column align-items-center">
                        <h4 class="pt-2"><?php echo $name; ?></h4>
                        <h5><?php echo $country; ?></h5>
                        <a class="btn btn-outline-light btn-lg mt-3" href="chat.php?user_email=<?php echo $email; ?>" role="button">Connect</a> 
                    </div>
                </div>


        </div>
        <?php }
                }else{ ?>
                    <p>No user found...</p>
                <?php } ?>

       

        
    </div>
    </div>


   <!-- footer -->
   <script>
    //This function is for flashight muse cursor effects
  const shadow = document.querySelector('.shadow');

document.addEventListener('mousemove', (e) => {
  let x = e.clientX - (document.documentElement.clientWidth * 1.5);
  let y = e.clientY - (document.documentElement.clientHeight * 1.5);
  shadow.style.transform = 'translate(' + x + 'px, ' + y + 'px)';
})
   </script>
   <?php include 'footer.php';?>