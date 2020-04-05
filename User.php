<?php
    include("db/connection.php");

	class User{
		//properties
		private $userName;
		private $password;
		private $role = 'customer';

		//constructor
		function __construct(){
			$get_arguments       = func_get_args();
			$number_of_arguments = func_num_args();

			if($number_of_arguments > 0)
				$this->__construct2($get_arguments[0],$get_arguments[1]);
		}

		function __construct2($userName,$password){
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

		public function checkPassword($id){
			global $conn;

			$sql = "SELECT password FROM User WHERE userId='$id'";

			$result = mysqli_query($conn,$sql);
			if(!$result)
				die("Failed to check Password :" . mysqli_error($conn));

			$row = mysqli_fetch_assoc($result);

			if($row['password']==$this->password)
				return 0;
			else	
				return 1;			
		}

		public function changePassword($id,$newpw){
			global $conn;

			$this->password = $newpw;

			$sql = "UPDATE User SET password='$password' WHERE userId='$id'";

			if(!mysqli_query($conn,$sql)){
                die("Failed to update user :" . mysqli_error($conn));
            }
		}

		public function deleteUser($id){
			global $conn;

			$sql = "UPDATE User SET isDeleted='1' WHERE UserId='$id'";				
			if(!mysqli_query($conn,$sql))
				die("Failed to delete User :" . mysqli_error($conn));
		}
	}

?>
