<?php
   	session_start();
    $dbcon = mysqli_connect("igor.gold.ac.uk", "ma202dc", "emigrmnt", "ma202dc_GroupProject");
		
	if($dbcon == FALSE){
		die("ERROR: Could not connect to database. " . mysqli_connect_error());
	}
		
	$user = $_SESSION['currentUser'];
	$category = $_POST['category'];
	$body = $_POST['body'];
	
	$user = mysqli_real_escape_string($dbcon, $user);
	$category = mysqli_real_escape_string($dbcon, $category);
	$body = mysqli_real_escape_string($dbcon, $body);
	
	if(isset($_POST['submitQuestion'])){
		
		$query = "INSERT INTO Question (Username, Q_Category, Q_Body) VALUES ('$user', '$category', '$body')";
		
		$result = mysqli_query($dbcon, $query);
		
		if($result){
	
			header('location: index.php');
		
		}
		else {
			
			print '<h2>Error! Please try to post your question again</h2>';
			
		}
		
		mysqli_close($dbcon);
	}
?>
