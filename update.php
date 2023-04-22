<?php
SESSION_START();
include 'dbConfig.php';

//connect to database

$connection = new mysqli($server, $username, $password, $database);
if(!$connection) {
	echo "Error";
} else {
    $imagePath = $_POST['imagePath'];
    $country = $_POST['country'];
    $bio = $_POST['bio'];
    $email = $_SESSION['email'];

    $check_user = "SELECT * FROM users WHERE email='$email'";
    $check_qry = mysqli_query($connection, $check_user);
    if($check_qry) {
    
        $sql = "UPDATE users SET country = '$country', bio = '$bio', image_path = '$imagePath' WHERE email='$email'";
        $run_qry=mysqli_query($connection, $sql);
        if($run_qry) {
            $_SESSION["update_message"] = 'Profile updated!';
             header("location: userProfile.php");
        } else {
            $_SESSION["update_message"] = 'Something went wrong, please try again.';
             header("location: updateProfile.php");
        }

    }
        
} 


?>