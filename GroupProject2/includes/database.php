<?php
    require_once 'config.php';
	
   class MySQLDatabase {
   	
	private $connection;
	
	function __construct() {
		$this->open_connection(); //Make sure connections is always open
	}
	
	public function open_connection() { // Connect to the database and show any errors
		$this->connection = mysqli_connect(db_hostname,db_username,db_password,db_name);
		if (mysqli_connect_errno()) {
			die("Database connection falied: " . mysqli_connect_error() . " (" .
			mysqli_connect_errno() . ")");
		}
	}
	
	public function close_connection() { // Close the connection to the databse
   	if(isset($this->connection)) {
   		mysqli_close($this->connection);
		unset($this->connection);
   	}
   }
   	
	public function query($sql) { // Can use to carry out different types of queries
		$result = mysqli_query($this->connection, $sql);
		$this->confirm_query($result);
		return $result;
	}
	
	private function confirm_query($result) {
		if(!$result) {
			die("Database query failed.");
		}
	}
	
	public function escape_value($string) {
		$escaped_string = 
		mysqli_real_escape_string($this->connection, $string);
		return $escaped_string;
	}
	
	//Database neutral functions
	public function fetch_array($result_set) {
		return mysqli_fetch_array($result_set);
	}
	
	public function num_rows($result_set) {
		return mysqli_num_rows($result_set);
	}
	
	public function insert_id() {
		return mysqli_insert_id($this->connection);
	}
	
	public function affected_rows() {
		return mysqli_affected_rows($this->connection);
	}
   }

   $database = new MySQLDatabase; // Create database object
?>