<?php
	// Session class for logging users in and out
	
	class Session {
		
		private $logged_in = false;
		public $user_id;
		public $first_name;
		
		function __construct() { // Constructor to start the session.
			session_start();
			$this->check_login();
		}
		
		public function is_logged_in() { // Gives access to logged in attribute
			return $this->logged_in;
		}
		
		public function login($user) {
			// database should find user based on username and password
			if($user) {
				$this->user_id = $_SESSION['user_id'] = $user->user_id;
				$this->first_name = $_SESSION['first_name'] = $user->first_name;
				$this->logged_in = true;
			}
		}
		
		public function logout() {
			unset($_SESSION['user_id']); // Reset this session variable
			unset($this->user_id); // Reset the user_id for this object
			$this->logged_in = false;
		}
		
		private function check_login() {
			if(isset($_SESSION['user_id'])) {
				$this->user_id = $_SESSION['user_id'];
				$this->logged_in = true;
			} else {
				unset($this->user_id);
				$this->logged_in =  false;
			}
		}
		
	}
	
	$session = new Session();
?>