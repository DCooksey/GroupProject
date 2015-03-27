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
	
	function end_session() {
		session_start();
		if(isset($_SESSION['currentUser'])) {
			print "logout.php";
		} else {
			print "#log-in";
		}
	}
?>