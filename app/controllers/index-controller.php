<?php 
session_start();
	// Get all fields first
	$email = "";
	$password = "";
	$empty_err = "";
	$invalid_err = "";

	if (isset($_POST['login_btn'])) {
		$activities = new Dbh;
		$email = $_POST['email'];
		$password = $_POST['password'];
	
		if (empty($email) || empty($password)) {
		$empty_err = "<p style='color:red'>Empty Field</p>";
		echo "<script>" . "alert('ERROR: Some Fields Were Left Empty')" . "</script>";
		}else{
			$checksql = "SELECT * FROM `anon_users` WHERE email='$email' AND password='$password'";
		    $result = $activities->connect()->query($checksql);
		    $resultCheck = $result->num_rows;
		    if ($resultCheck > 0) {
		    	$_SESSION['email'] = $email;
		    	$_SESSION['password'] = $password;
		    	header("Location: " . PROOT . "home");
			}
			else{
				$invalid_err = "<p style='color:red'>Invalid Login Details</p>";
		echo "<script>" . "alert('ERROR: Invalid Login Details')" . "</script>";
			}
	}
	
}

	?>