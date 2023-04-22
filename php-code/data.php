<?php 
    while($row = mysqli_fetch_assoc($query)) {
        $incoming_email = $row['email'];
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = '$incoming_email' OR outgoing_msg_id = '$incoming_email') 
                AND (outgoing_msg_id = '$outgoing_id' OR incoming_msg_id = '$outgoing_id') ORDER BY msg_id DESC LIMIT 1";

        $query2 = mysqli_query($connection, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        if(mysqli_num_rows($query2) > 0) {
            
            $result = $row2['msg'];
        } else {
            $result = "No message available.";
        }

        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
       //check user online or offline
       ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
       
        $output .= ' <a href="chat.php?user_email='. $row['email'] .'">
                    <div class="content">
                        <img src="'. $row['image_path'] .'" alt="">
                        <div class="details">
                        <span>'. $row['name'] .' - <span class="text-muted">'. $row['country'] .'</span> </span>
                        
                        <p>'. $you . $msg .'</p>
                        </div>
                    </div>
                    <div class="status-dot '. $offline .'"><i class="bi bi-circle-fill"></i></div>
                </a>';
    }
?>