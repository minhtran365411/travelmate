<?php
SESSION_START();
if(isset($_SESSION['email'])){
    // Include the database configuration file
    include_once 'dbConfig.php';

    // Create database connection
    $connection = new mysqli($server, $username, $password, $database);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    $logout_email = $_SESSION['email'];
    if(isset($logout_email)){
        $status = "Offline now";
        $sql = mysqli_query($connection, "UPDATE users SET status = '$status' WHERE email = '$logout_email'");
        if($sql){
            session_unset();
            session_destroy();
            header("Location: /index.php");
        }
    }else{
        header("location: ../chatlist.php");
    }
}else{  
    header("Location: /index.php");
}

?>


    