<?php
    session_start();
    $dbcon = mysqli_connect("igor.gold.ac.uk", "ma202dc", "emigrmnt", "ma202dc_GroupProject");
		
	if($dbcon == FALSE){
		die("ERROR: Could not connect to database. " . mysqli_connect_error());
	}
		
	$email = mysqli_real_escape_string($dbcon, $_POST['email']);
	$password = mysqli_real_escape_string($dbcon, $_POST['password']);
	
	if($email == ""){
		echo 'Login Failed!';
	}
	
	if(isset($_POST['submitLogin'])){
		
		$query = "SELECT ID, Email, Password FROM User WHERE Email='$email' AND Password='$password";
		
		$result = mysqli_query($dbcon, $query);
		
		$row = mysqli_fetch_array($result);

		if($row['Email'] == $email && $row['Password'] == $password){
		$_SESSION['currentUser'] = $email;
		header('location: index.php');
		
		}
		else {
			echo 'Login Failed!';
			
		}
		
		mysqli_close($dbcon);
	}
?>
