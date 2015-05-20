<?php
    // Custom functions
    
    // Checks if user is logged in
    function is_loggedin() {
	
	session_start();
	// Check for the session
	if (isset($_SESSION['currentUser'])) {
		
		print '<a href="logout.php" class="ui-btn ui-icon-user ui-btn-icon-left ui-nodisc-icon" data-ajax="false">Log Out</a></li>';
	} else {
		print '<a href="#log-in" class="ui-btn ui-icon-user ui-btn-icon-left ui-nodisc-icon" data-ajax="false">Log In</a></li>';
	}

}
	function create_form() {
		print '<div class="ui-content">
				<div data-role="fieldcontain">
					<label for="select-choice-1" class="select"></label>
					<form action="ask.php" method="post" data-ajax="false">
						<select required name="category" id="select-choice-1">
							<option>Category</option>
							<option value="general">General</option>
							<option value="computing">Computing</option>
							<option value="history">History</option>
							<option value="food">Food</option>
						</select>
				<textarea name="body" id="textarea-a">Leave a question...</textarea>
				<input type="submit" name="submitQuestion" id="submit" value="Post Question" data-mini="true">	
				</form>	
				</div>
			<h3 style="text-align: center">Instant help from your collegues</h3>
		</div>';
	} 

?>