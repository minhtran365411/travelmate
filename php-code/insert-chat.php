<?php
    session_start();
    if(isset($_SESSION['email'])) {
        include_once '../dbConfig.php';
        // Create database connection
        $connection = new mysqli($server, $username, $password, $database);

        // Check connection
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        $outgoing_id = mysqli_real_escape_string($connection, $_POST['outgoing_id']);
        $incoming_id = mysqli_real_escape_string($connection, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($connection, $_POST['message']);
    
        if(!empty($message)) {
            $sql = mysqli_query($connection, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
                                VALUES ('$incoming_id','$outgoing_id','$message')") or die();
        }

    } else {
        header("../login.php");
    }
?>