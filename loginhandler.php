<?php
    session_start();
    $dbcon = mysqli_connect("igor.gold.ac.uk", "ma202dc", "emigrmnt", "ma202dc_GroupProject");
		
	if($dbcon == FALSE) {
		print "ERROR: Could not connect to database. " . mysqli_connect_error();
	}
	
	if(!empty($_POST['email']) && !empty($_POST['password'])) {
		
		$email = mysqli_real_escape_string($dbcon, $_POST['email']);
		$password = mysqli_real_escape_string($dbcon, $_POST['password']);
		
		$query = "SELECT * FROM User WHERE Email='$email' AND Password='$password'";
		
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
