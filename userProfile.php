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
    <title>My Account | Travel Mate</title>
    <link rel="shortcut icon" type="image/png" href="/img/TRavel-Mate-favicon.png">

</head>
<body>
<?php include 'navbar.php';

if(!isset($_SESSION['email'])) { 
    header("location: login.php");
}

include 'dbConfig.php';
// Create database connection
$connection = new mysqli($server, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>

<img src="img/user-banner.png" class="img-fluid" alt="">
	<!-- MAIN-->
    <div class="container" style="width: 80%; margin: 10% auto;">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-6">
                    <?php if(isset($_SESSION["username"]))  { 
                        $email = $_SESSION['email'];
                        $findUserID = "Select * from users WHERE email = '$email'";
                        $result = mysqli_query($connection,$findUserID) or die("Bad Query.");
                        while($row = $result->fetch_array()) {
                            $userID = $row['id'];
                            $name = $row['name'];
                            $country = $row['country'];
                            $bio = $row['bio'];
                            $image_path = $row['image_path'];
                        } ?>

                        <img class="img-fluid profileImg" src="<?php echo $image_path ?>" alt="">
                    <?php } ?>
                    </div>
                    <div class="col-6">
                        <h2><?php echo $name ?></h2>
                        <h4><?php echo $country ?></h4>
                        <p><?php echo $bio ?></p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6"> 
            <center>
            <a href="updateProfile.php" class="btn btn-primary signUpBtn my-3">UPDATE PROFILE</a>
            </center>
            </div>
        </div>
    </div>


    <!-- footer -->
<?php include 'footer.php';
?>