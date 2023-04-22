<?php
SESSION_START();
include 'dbConfig.php';

//connect to database

$connection = new mysqli($server, $username, $password, $database);
if(!$connection) {
	echo "Error";
} else {
	switch($_POST['action']) {
		case 'registration':
			if ($_POST['password'] === $_POST['confirm_password']) {
				$name = $_POST['name'];
				$email = $_POST['email'];
				$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
				$userType = $_POST['userType'];
				$status = "Active now";
				$check_user = "SELECT * FROM users WHERE email='$email'";
				$check_qry = mysqli_query($connection, $check_user);
				if(mysqli_num_rows($check_qry) > 0) {
					$_SESSION["regis_message"] = 'This email is already registered! Please try again.';
					header("location: register.php");
				} else {
					$sql = "INSERT INTO users(email, password, name, userType, status) VALUES ('$email', '$password', '$name', '$userType', '$status')";
					$run_qry=mysqli_query($connection, $sql);
					if($run_qry) {
						if ($userType == 'traveler') {
							$_SESSION['username'] = $name;
							$_SESSION['email'] = $email;
							$status = "Active now";
							$sql = mysqli_query($connection, "UPDATE users SET status = '$status' WHERE email = '$email'");
							if ($sql) {
								header("location:index.php");
							}
						} else {
							$_SESSION['username'] = $name;
							$_SESSION['email'] = $email;
							$status = "Active now";
							$sql = mysqli_query($connection, "UPDATE users SET status = '$status' WHERE email = '$email'");
							if ($sql) {
								header("location: userProfile.php"); 
							echo "<h1>Complete your profile to get your name shown up in the tour guide list.</h1>";
							}
							
						}
					} else {
						$_SESSION["regis_message"] = 'Something went wrong, please retry'.$userType;
						header("location: register.php");
					}
				}
					
			} else {
				$_SESSION["regis_message"] = 'Password and confirm password not match, please retry.';
				header("location: register.php");
			}
			
			break;
				

			case 'login':
				$email = $_POST['email'];
                $password = $_POST['password'];
				
				$select_user = "SELECT * FROM users WHERE email='$email'";
				$run_qry= mysqli_query($connection, $select_user);
				if(mysqli_num_rows($run_qry) > 0) {
					while($row=mysqli_fetch_assoc($run_qry)) {
						if(password_verify($password, $row['password'])) {
							$email=$row['email'];
							$_SESSION['email'] = $email;
							$_SESSION['username'] = $row['name'];
							$status = "Active now";
							$sql = mysqli_query($connection, "UPDATE users SET status = '$status' WHERE email = '$email'");
							if ($sql) {
								header("location:index.php");
							}
						} else {
							$_SESSION["message"] = 'Wrong password';
                            header("location:login.php");
						}
					}
				} else {
					$_SESSION["message"] = 'No user with that email in database';
                    header("location:login.php");
				}
			

	}
}

?>