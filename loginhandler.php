<?php
    session_start();
    $dbcon = mysqli_connect("igor.gold.ac.uk", "ma202dc", "emigrmnt", "ma202dc_GroupProject");
		
	if($dbcon == FALSE){
		die("ERROR: Could not connect to database. " . mysqli_connect_error());
	}
		
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	if($email == ""){
		echo 'Login Failed!';
	}
	
	$email = mysqli_real_escape_string($dbcon, $email);
	$password = mysqli_real_escape_string($dbcon, $password);
	
	if(isset($_POST['submitLogin'])){
		
		$query = "SELECT ID, Email, Password FROM User WHERE Email='$email' AND Password='$password";
		
		$result = mysqli_query($dbcon, $query);
		
		$row = mysqli_fetch_row($result);
		
		//$id = $row[0];
		
		//$dbEmail= $row[1];
		
		//$dbPassword = $row[2];
		
		//if($email== $dbEmail && $password == $dbPassword){
			
			

		if($result){
		$_SESSION['currentUser'] = $email;
		header('location: index.php');
		
		}
		else {
			echo 'Login Failed!' .$dbEmail.$dbPassword;
			
		}
		
		mysqli_close($dbcon);
	}
?>
