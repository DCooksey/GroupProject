<?php
    session_start();
    $dbcon = mysqli_connect("igor.gold.ac.uk", "ma202dc", "emigrmnt", "ma202dc_GroupProject");
		
	if($dbcon == FALSE){
		die("ERROR: Could not connect to database. " . mysqli_connect_error());
	}
		
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$email = mysqli_real_escape_string($dbcon, $email);
	$password = mysqli_real_escape_string($dbcon, $password);
	
	if(isset($_POST['submitLogin'])){
		
		$query = "SELECT Email, Password FROM User WHERE Email='$email' AND Password='$password'";
		
		$result = mysqli_query($dbcon, $query);
		
		if($result){
			$_SESSION['currentUser'] = $email;
			header('location: index.php');
		
		}
		else {
			echo "Login Failed!";
			
		}
		
		mysqli_close($dbcon);
	}
?>
