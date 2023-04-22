<?php 
session_start();
// Include the database configuration file
include_once '../dbConfig.php';

// Create database connection
$connection = new mysqli($server, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$outgoing_id = $_SESSION['email'];
$sql = "SELECT * FROM users WHERE NOT email = '$outgoing_id' AND userType = 'tourGuide' ORDER BY id DESC";
$query = mysqli_query($connection, $sql);
$output = "";
if(mysqli_num_rows($query) == 0){
    $output .= "No users are available to chat";
} else if (mysqli_num_rows($query) >0){
    include_once "data.php";
}
echo $output;
?>


