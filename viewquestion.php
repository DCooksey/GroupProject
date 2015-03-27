<?php
    session_start();
     $dbcon = mysqli_connect("igor.gold.ac.uk", "ma202dc", "emigrmnt", "ma202dc_GroupProject");
    
	if($dbcon == FALSE){
		die("ERROR: Could not connect to database. " . mysqli_connect_error());
	}
	
	$id = $_POST['questionid'];
	
	
	if(isset($_POST['viewQuestion']))
     	

		$query = "SELECT Q_ID FROM Question WHERE Q_ID = {$_POST['questionid']}";

	
        $result = mysqli_query($dbcon, $query) or die(mysqli_error($dbcon));
		
		while($row = mysqli_fetch_array($result)){
            
            echo '<div>';
            echo "<h1>".$row['Q_Body']."</h1>";
            echo "<h4>".$row['Q_Category']."</h4>";
			echo "<h5>".$row['Username']."</h5>"; 
		}
		
	mysqli_close($dbcon);
   	
?>