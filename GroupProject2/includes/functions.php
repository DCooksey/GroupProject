<?php
    
 function redirect_to($location = NULL) {
 	if($location != NULL) {
 		header("Location: {$location}");
		exit;
 	}
 }
 
 function output_message($message="") {
 	if(!empty($message)) {
 		 echo $message;
 	} else {
 		return "";
 	}
 }
 
 function __autoload($class_name) {
 	$class_name = strtolower($class_name);
	$path = "includes/{$class_name}.php";
	if(file_exists($path)) {
		require_once($path);
	} else {
		die("The file {$class_name}.php could not be found");
	}
 }

?>