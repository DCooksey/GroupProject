<?php
include 'templates/header.php';
    // Begin the session
    session_start();

   // Unset all of the session variables.
   $_SESSION = array();

   // Destroy the session.
   session_destroy();
   
   header("Location: index.php");
?>

<div class="ui-content">
	<h2 style="text-align: center">You are now logged out!</h2>
</div>

<?php include 'templates/footer.php'; ?>