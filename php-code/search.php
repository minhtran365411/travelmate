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

    $searchTerm = mysqli_real_escape_string($connection, $_POST['searchTerm']);
    $output ="";
    $outgoing_id = $_SESSION['email'];
    $sql = "SELECT * FROM users WHERE NOT email = '$outgoing_id'  AND userType = 'tourGuide' AND (name LIKE '%{$searchTerm}%' OR country LIKE '%{$searchTerm}%')  ORDER BY id DESC";
    $query = mysqli_query($connection, $sql);
    if (mysqli_num_rows($query) >0){
        include 'data.php';
    } else {
        $output .= "No user found related to your search term.";
    }
    echo $output;
?>