<?php
    include("db/connection.php");

	class User{
		//properties
		private $userName;
		private $password;
		private $role = 'customer';

		//constructor
		function __construct($userName,$password){
			$this->userName = $userName;
			$this->password = $password;
		}

		//methods
		public function insertUser(){
			global $conn;

			$sql = "INSERT INTO User(username,password,role) VALUES('$this->userName','$this->password','$this->role')";        
			
			if(!mysqli_query($conn,$sql)){
                		die("Failed to create user :" . mysqli_error($conn));
            		}
		}
	}

?>
