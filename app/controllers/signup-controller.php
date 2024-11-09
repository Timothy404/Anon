<?php 
session_start();
	// Get all fields first
	$email = "";
	$password = "";
	$username = "";
	$empty_err = "";
	$username_err = "";
	$email_err = "";
	$activities = new Dbh;

	if (isset($_POST['login_btn'])) {
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
	
		if (empty($email) || empty($password) || empty($username)) {
		$empty_err = "<p style='color:red'>Empty Field</p>";
		echo "<script>" . "alert('ERROR: Some Fields Were Left Empty')" . "</script>";
		}else{

			// Check if Email Exists

			$checkemailsql = "SELECT * FROM `anon_users` WHERE email='$email'";
			$emailresult = $activities->connect()->query($checkemailsql);
		    $emailresultCheck = $emailresult->num_rows;
		    if ($emailresultCheck > 0) {

		    	$email_err = "<p style='color:red'>Email is Taken</p>";
				echo "<script>" . "alert('ERROR: Email is Taken')" . "</script>";

		    }

		    // Check if Username Exists

			$checkusernamesql = "SELECT * FROM `anon_users` WHERE username='$username'";
 			
			$usernameresult = $activities->connect()->query($checkusernamesql);
		    $usernameresultCheck = $usernameresult->num_rows;
		    if ($usernameresultCheck > 0) {

		    	$username_err = "<p style='color:red'>Username is Taken</p>";
				echo "<script>" . "alert('ERROR: Username is Taken')" . "</script>";

		    }
		}
		if ( empty($username_err) || empty($email_err)){
			// INSERT THE USER
			$table_name = trim($username) . "_table";
			$activities->insert("anon_users", " `username`, `email`, `password`, `pfp`, `msg_table_ref` ", " '$username', '$email', '$password', 'null', '$table_name'");
			
			$table_sql = "CREATE TABLE IF NOT EXISTS `anon`.`$table_name` (`id` INT NOT NULL AUTO_INCREMENT , `msg` VARCHAR(255) NOT NULL , `msg_type` VARCHAR(255) NOT NULL , `country` VARCHAR(255) NOT NULL , `city` VARCHAR(255) NOT NULL , `ip_address` VARCHAR(255) NOT NULL , `date` VARCHAR(255) NOT NULL , `time` VARCHAR(255) NOT NULL , `isp` VARCHAR(255) NOT NULL , `gender` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; 
			";
			$activities->connect()->query($table_sql);
				$_SESSION['email'] = $email;
		    	$_SESSION['password'] = $password;
		    	header("Location: " . PROOT . "home");
			}
	
}

	?>