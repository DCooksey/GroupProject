<?php
    session_start();
    $dbcon = mysqli_connect("igor.gold.ac.uk", "ma202dc", "emigrmnt", "ma202dc_GroupProject");
		
	if($dbcon == FALSE){
		die("ERROR: Could not connect to database. " . mysqli_connect_error());
	}
	else{
		echo 'Connection to database established';
	}
		
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$email = mysqli_real_escape_string($dbcon, $email);
	$password = mysqli_real_escape_string($dbcon, $password);
	
	if(isset($_POST['submitLogin'])){
		
		$query = "SELECT Email, Password FROM Login WHERE Username='$email'";
		
		$result = mysqli_query($dbcon, $query);
		
		$row = mysqli_fetch_row($result);
		
		$dbEmail = $row[0];
		
		$dbPassword = $row[1];
		
		if($email == $dbEmail && $password == $dbPassword){
			$_SESSION['currentUser'] = $email;
			echo "Welcome back " . $_SESSION['currentUser'];
		
		}
		else {
			echo "Login Failed!";
			
		}
		
		mysqli_close($dbcon);
	}
?>
