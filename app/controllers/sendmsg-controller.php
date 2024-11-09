<?php 
	// GET THE URL
	$url = $_SERVER['REQUEST_URI'];
	// SLICE THE UNWANTED PART
	$user = str_replace("/anon/sendmsg/user/@", "", $url);
	// CHECK IF THE USER EXIST 
	$sql = "SELECT * FROM `anon_users` WHERE username='$user'";
	$query = (new Dbh)->connect()->query($sql);
	$check = $query->num_rows;
	if ($check > 0) {
		// DO NOTHING BECAUSE THE USER EXIST
	}else{
		// KICK THE PERSON TO A NOT FOUND PAGE
		header("Location: " . PROOT . "UserNotFound");
	}

	// DECLARE VARIABLES
	$txt = "";
	$country = "";
	$gender = "";
	$isp = "";
	$ip = "";
	$city = "";
	$success = "";
	$empty_err = "";
 

	// CHECK IF THE SEND BUTTON HAS BEEN PRESSED
	if (isset($_POST['msg_send'])) {
		$txt = $_POST['msg_txt'];
		$country = $_POST['country'];
		$gender = $_POST['gender'];
		$isp = $_POST['isp'];
		$ip = $_POST['ip_address'];
		$city = $_POST['city'];
		$date = date("l jS \of F Y h:i:s A");
		$time = date("h:i:s");

		if (empty($txt)) {
			$empty_err = "<p style='color:red'>Enter A Message or Randomize a Message</p>";
		}else{
			$table = $user . "_table";
			$success = "<p style='color:green'>Sent!</p>";
			(new Dbh)->insert("$table", 
				"`msg`, `msg_type`, `country`, `city`, `ip_address`, `date`, `time`, `isp`, `gender`", 
				" '$txt', 'null', '$country', '$city', '$ip', '$date', '$time', '$isp', '$gender' ");
			header("Location: " . PROOT . "Sent");
		}

	}
?>