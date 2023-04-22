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

    $outgoing_id = $_SESSION['email'];
    $incoming_id = mysqli_real_escape_string($connection, $_POST['incoming_id']);
    $output = "";

    $sql = "SELECT * FROM messages 
            LEFT JOIN users ON email = messages.outgoing_msg_id
            WHERE (outgoing_msg_id = '$outgoing_id' AND incoming_msg_id = '$incoming_id') OR
            (outgoing_msg_id = '$incoming_id' AND incoming_msg_id = '$outgoing_id') ORDER BY msg_id ASC";

    $query = mysqli_query($connection, $sql);
    if(mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            if($row['outgoing_msg_id'] === $outgoing_id) { //if this is equal it means this is the sended
                $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                            </div>';
            } else { //this is the receiver
                $output .= '<div class="chat incoming">
                                <img src="'. $row['image_path'] .'" alt="">
                                <div class="details">
                                   <p>'. $row['msg'] .'</p>
                                </div>
                            </div>';
            }
        }
        echo $output;
    }


} else {
    header("../login.php");
}
?>