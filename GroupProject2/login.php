<?php 
define('HEADING', 'Login');
require_once 'templates/header.php';

if($session->is_logged_in()) { redirect_to("index.php");}

// Form has been submitted
if(isset($_POST['submit'])) { 
	
	$username = trim($_POST['username']);
    $password = trim($_POST['password']);
	
	// Check database to see if username and password exist
	$found_user = User::authenticate($username,$password);
	
	if($found_user) {
		$session->login($found_user);
		redirect_to("index.php");
	} else {
		$message = "Username/Password was incorrect";
	}
} else {
   $username = "";
   $password = "";
} 

    
?>
	<div class="ui-content">
		<form action="login.php" method="post" >
			<label for="username">Username:</label>
			<input type="text" name="username" id="username" placeholder="(e.g cuser001)" />
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" placeholder="" />
			<input type="submit" name="submit" value="Log In" />
		</form>
		 <p></p>
		<a href="#"><p style="float: center">Forgot Password?</p></a>
	</div>

 <?php include 'templates/footer.php'; ?>
<!-- End Login -->
