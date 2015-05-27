<?php

	require_once 'database.php';
	require_once 'session.php';
	
    class Post {
    	
		protected static $table_name = "goldhub_post";
		protected static $db_fields = array('post_id','user_id','category_id','post_content','post_date');
		public $post_id;
		public $user_id;
		public $category_id;
		public $post_content;
		public $post_date;
		
		public $errors = array();
		
		// From $_POST['the post];
		public function add_post($post) {
			if(!$post || empty($post) || !is_array($post)) {
				$this->errors[] = "You didn't post anything";
				return false;
			} else {
				$this->post_content = $post;
				return true;
			}
		}
		
		//Overide
		public function save() {
			if(isset($this->post_id)) {
				$this->update();
			} else {
				$this->create();
				}
			}
		
		public static function find_all() {
			return self::find_by_sql("SELECT * FROM ".self::$table_name."");
		}
		
		public static function find_by_id($id=0) {
			global $database;
			$result_array = self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE user_id={$id} LIMIT 1");
			return !empty($result_array) ? array_shift($result_array) : false;
		}
		
		public static function find_by_sql($sql="") {
			global $database;
			$result_set = $database->query($sql);
			$object_array = array();
			while($row = $database->fetch_array($result_set)) {
				$object_array[] = self::instantiate($row);
			}
			return $object_array;
		}
		
		public static function authenticate($username="", $password="") {
			global $database;
			$username = $database->escape_value($username);
			$password = $database->escape_value($password);
			
			$sql = "SELECT * FROM ".self::$table_name." WHERE username = '{$username}' AND password = '{$password}' LIMIT 1";
			
			$result_array = self::find_by_sql($sql);
			return !empty($result_array) ? array_shift($result_array) : false;
		}
	
		private static function instantiate($record) {
			$object = new self;
			
			foreach($record as $attribute => $value){
				if($object->has_attribute($attribute)){
					$object->$attribute = $value;
				}
			}
			return $object;
		}
		
		private function has_attribute($attribute) {
			$object_vars = $this->attributes(); // Returns and associative array of all the attributes
			
			return array_key_exists($attribute, $object_vars); // Will return true or false depending on if the attribute exist
		}
    	
		protected function attributes() {
			// return array of attribute keys and values
			$attributes = array();
			foreach(self::$db_fields as $field) {
				if(property_exists($this, $field)){
					$attributes[$field] = $this->$field;
				}
			}
			return $attributes;
		}
		
		protected function sanitized_attributes() {
			global $database;
			$clean_attributes = array();
			
			foreach($this->attributes() as $key => $value) {
				$clean_attributes[$key] = $database->escape_value($value);
			}
			
			return $clean_attributes;
		}
		
		// public function save() {
			// return (isset($this->user_id) ? $this->update() : $this->create());
		// }
		
		public function create(){
			global $database;
			$attributes = $this->sanitized_attributes();
			$sql = "INSERT INTO ".self::$table_name." (";
			$sql .= join(", ", array_keys($attributes));
			$sql .= ") VALUES ('";
			$sql .= join("', '", array_values($attributes));
			$sql .= "')";
			if($database->query($sql)) {
				$this->user_id = $database->insert_id();
				return true;
			} else {
				return false;
			}
		} 
		
		public function update(){
			global $database;
			$attributes = $this->sanitized_attributes();
			$attribute_pairs = array();
			
			foreach($attributes as $key => $value) {
				$attribute_pairs[] = "{$key}='{$value}'";
			}
			
			$sql = "UPDATE ".self::$table_name." SET "; 
			$sql .= join(", ", $attribute_pairs);
			$sql .= " WHERE user_id=". $database->escape_value($this->user_id);
			$database->query($sql);
			return ($database->affected_rows() == 1) ? true : false;
		}
		
		public function delete(){
			global $database;
			$sql = "DELETE FROM ".self::$table_name." WHERE user_id='$this->user_id'";
			$database->query($sql);
			return ($database->affected_rows() == 1) ? true : false;
		}
		
		
    }
?>