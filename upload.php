<?php
SESSION_START();
// Include the database configuration file
include 'dbConfig.php';

// Create database connection
$connection = new mysqli($server, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$statusMsg = '';

// File upload path
$targetDir = "./uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$caption = $_POST['caption'];
$userID = "";

$email = $_SESSION['email'];

$findUserID = "Select * from users WHERE email = '$email'";
$result = mysqli_query($connection,$findUserID) or die("Bad Query.");

while($row = $result->fetch_array()) {
    $userID = $row['id'];
}
				

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $connection->query("INSERT into images (file_name, uploaded_on, caption) VALUES ('".$fileName."', NOW(), '$caption') ON DUPLICATE KEY UPDATE OwnerID = '$userID'");
            if($insert){
                //$update = $connection->query("UPDATE images SET OwnerID = $userID WHERE fileName = '$fileName'");
                $_SESSION["statusMsg"] = "The file ".$fileName. " has been uploaded successfully.";
                header("location:gallery.php");
            }else{
                $_SESSION["statusMsg"] = "File upload failed, please try again.";
                header("location:gallery.php");
            } 
        }else{
            $_SESSION["statusMsg"] = "Sorry, there was an error uploading your file.";
            header("location:gallery.php");
        }
    }else{
        $_SESSION["statusMsg"] = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        header("location:gallery.php");
    }
}else{
    $_SESSION["statusMsg"] = 'Please select a file to upload.';
    header("location:gallery.php");
}

// Display status message
echo $statusMsg;
?>