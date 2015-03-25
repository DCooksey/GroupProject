<?php
    session_start();
    $dbcon = mysqli_connect("igor.gold.ac.uk", "ma202dc", "emigrmnt", "ma202dc_CMS");
		
	if($dbcon == FALSE){
		die("ERROR: Could not connect to database. " . mysqli_connect_error());
	}
		
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$username = mysqli_real_escape_string($dbcon, $username);
	$password = mysqli_real_escape_string($dbcon, $password);
	
	if(isset($_POST['submitLogin'])){
		
		$query = "SELECT Email, Password FROM Login WHERE Username='$username'";
		
		$result = mysqli_query($dbcon, $query);
		
		$row = mysqli_fetch_row($result);
		
		$dbEmail = $row[0];
		
		$dbPassword = $row[1];
		
		if($email == $dbEmail && $password == $dbPassword){
			$_SESSION['currentUser'] = $username;
			echo "Welcome back " . $_SESSION['currentUser'];
		
		}
		else {
			echo "Login Failed!";
			
		}
		
		mysqli_close($dbcon);
	}
?>