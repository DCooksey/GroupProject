<?php
	session_start();
     $dbcon = mysqli_connect("igor.gold.ac.uk", "ma202dc", "emigrmnt", "ma202dc_GroupProject");
    
	if($dbcon == FALSE){
		die("ERROR: Could not connect to database. " . mysqli_connect_error());
	}
	
	
    try {
     	
<<<<<<< HEAD
		$query = "SELECT * FROM Question ORDER BY Q_id DESC";
=======
		$query = "SELECT * FROM Question order by Q_id DESC";
>>>>>>> origin/master
	
        $result = mysqli_query($dbcon, $query) or die(mysqli_error($dbcon));
		
        while($row = mysqli_fetch_array($result)){
            
            echo '<div>';
                echo "<h1>".$row['Q_Body']."</h1>";
                echo "<h4>".$row['Q_Category']."</h4>";
				echo "<h5>".$row['Username']."</h5>"; 
				echo '<form action="" id="answer-question">
					<input type="submit" name="viewQuestion" id="submit" value="View" />
					</form>
					<hr />';                             
           echo "</div>";

        }
	}	catch(PDOException $e) {
        // echo $e->getMessage();
    }
	mysqli_close($dbcon);
   
?>