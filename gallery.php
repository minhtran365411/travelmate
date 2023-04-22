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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <!--title -->
    <title>Travel Mate Images Gallery Inspo</title>
    <link rel="shortcut icon" type="image/png" href="/img/TRavel-Mate-favicon.png">

    <!--font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">



</head>
<body>
<?php include 'navbar.php';?> 

	<!-- MAIN-->
    <div class="bg-image2 d-flex align-items-center">
    <h1 class="galleryHeading">Get ready for <span id="element"></span></h1>
    </div>
    
    <!-- GALLERY-->
    <div class="photo-gallery mb-4">
        <div class="container mb-4">
            <div class="intro">
                <h1 class="text-center headline">Travel Image Gallery</h1>
                <p class="text-center mb-3"><i>"A change of latitude would help my attitude." – Unknown</i></p>

                <?php
            if (isset( $_SESSION["statusMsg"])) {
                echo $_SESSION["statusMsg"];
            }
            ?>

            <?php if(isset($_SESSION["username"]))  { ?>
                <form id="galleryForm" action="upload.php" method="post" enctype="multipart/form-data">
                    <h5 class="mb-4">Want to share your travel stories?</h5>
                    <input type="file" name="file">
                    <input class=" form-control underline_input mt-4" type="text" name="caption" placeholder="Caption for image, ex: its location" required>
                    <input class="btn btn-primary signUpBtn mt-4" type="submit" name="submit" value="Upload">
                    
                </form>
            <?php } ?>

            </div>

            <div class="row photos">

            <?php
            // Get images from the database
                $query = $connection->query("SELECT * FROM images ORDER BY uploaded_on DESC");

                if($query->num_rows > 0){
                    while($row = $query->fetch_assoc()){
                        $imageURL = 'uploads/'.$row["file_name"];
                        $caption = $row['caption'];
                ?>
                    
                <div class="col-sm-6 col-md-4 col-lg-3 item">
                    <a href="<?php echo $imageURL; ?>" data-lightbox="photos" data-title="<?php echo $caption; ?>">
                        <img class="img-fluid" src="<?php echo $imageURL; ?>">
                    </a>
                </div>
                <?php }
                }else{ ?>
                    <p>No image(s) found...</p>
                <?php } ?>

            </div>
        </div>
    </div>

<!-- footer -->

<script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
<script>
    var typed = new Typed('#element', {
      strings: ['an epic adventure! ^1000', 'a meaningful friendship. ^1000', 'exploring in a better way. ^1000','a Travel Mate experience. ^1000'],
      typeSpeed: 50,
      backSpeed: 30,
      loop: true
    });
  </script>



<?php 
include 'footer.php';
unset($_SESSION["statusMsg"]);
?>
