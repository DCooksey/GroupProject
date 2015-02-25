<html>
	<head>
		<title>TESTER</title>
	</head>
	
	<body>
		
		<form action="dbtest.php" method="post">
			QUESTION ID:<input type="text" name="questionid"><br />
			USER ID:<input type="text" name="userid"><br />
			QUESTION PICTURE:<input type="text" name="questionpic"><br />
			CATEGORY:<input type="text" name="category"><br />
			RATING:<input type="text" name="rating"><br />
			BODY:<input type="text" name="body"><br />
			DATE:<input type="text" name="questionid"><br />
			<input type="submit" name="submit">
		</form>
	
		<?php 
		
		if(isset($_POST['submit'])) {
		
		$con = mysqli_connect('igor.gold.ac.uk','ma201nd','Marineking89', 'ma201nd_AppDatabase'); //$dbc = mysqli_connect('localhost','root','');

		// Check connection 
		if (mysqli_connect_errno()) { echo "Failed to connect to MySQL: " . mysqli_connect_error(); } else { echo "Success"; }
		
		$sql = "INSERT INTO Question (QUESTION_ID, USER_ID, QUESTION_PICTURE, CATEGORY, RATING, BODY, DATE) VALUES ('$_POST[questionid]','$_POST[userid]','$_POST[questionpic]','$_POST[]') " //TO BE FINISHED
		
		mysql_query($sql, $con);
		
		mysql_close($con)
		}
		?>
		
	</body>
</html>