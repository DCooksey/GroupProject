<?php
    // Custom functions
    
    // Checks if user is logged in
    function is_loggedin() {
	
		session_start();
	// Check for the session
	if (isset($_SESSION['currentUser'])) {
		print 'Log Out';
	} else {
		print 'Log In';
	}

} 
?>