<?php

	// start session
	session_start();
	// connect to Model
	$activities = new Dbh;

	// Authenticate User is Loggedin Before Granting Access
	if ($_SESSION['email'] == null || $_SESSION['password'] == null) {
		session_destroy();
		header("Location: " . PROOT . "");
	}

	// Get the Username of Session User
	function username(){
		$email = $_SESSION['email'];
		$password = $_SESSION['password'];
		$getUser = (new Dbh)->select("anon_users", " WHERE `email`='$email' AND `password` = '$password' ");
		foreach ($getUser as $value){
			return $value['username'];
		}
	}

	// Get Username By ID
	function usernameByID($id){
		$getUser = (new Dbh)->select("anon_users", " WHERE id = $id");
		foreach ($fetchUsers as $value){
			echo $value['username'];
		}
	}

	$msg_username = username() . "_table";
	$getMessages = (new Dbh)->select("$msg_username", "");

?>