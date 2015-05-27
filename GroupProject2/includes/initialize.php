<?php
	
	// This class prevents us from repeating the files we need on every page that requires these files!
	// Define the core paths so require once works as expected
	
	//  Pre defined php constant DIRECTORY_SEPERATOR
	defined('DS') ? NULL : define('DS', 'DIRECTORY_SEPERATOR');
	
	// Define the file system path of the project
	defined('SITE_ROOT') ? NULL : define('SITE_ROOT', DS.'C:'.DS.'wamp'.DS.'www'.DS.'GroupProject2');
	
	// This defines the path to the includes folder
	defined('LIB_PATH') ? NULL : define('LIB_PATH', SITE_ROOT.DS.'includes');
	
	// Load config file first
	require_once 'config.php';
	
	// Load functions so everything after them can use them
	require_once 'functions.php';
	
	// Load our core objects
	require_once 'session.php';
	require_once 'database.php';
	
	// Load database related classes
	require_once 'user.php';
	require_once 'post.php';
?>