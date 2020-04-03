<?php
    include("db/connection.php");
    include("User.php");

	class Customer{
		//properties
		private $nic;
		private $licenseNumber;
		private $FName;
		private $MName;
		private $LName;
		private $address;
		private $telephone;
		
		//constructor
		function __construct($nic,$licenseNumber,$FName,$MName,$LName,$address,$telephone){
			$this->nic = $nic;
			$this->licenseNumber = $licenseNumber;
			$this->FName = $FName;
			$this->MName = $MName;
			$this->LName = $LName;
			$this->address = $address;
			$this->telephone = intVal($telephone);
		}

		//methods
		public function insertCustomer($username,$password){
			global $conn;

			$u = new User($username,$password);
			$u->insertUser();

			$last_id = mysqli_insert_id($conn);
			echo
			$sql = "INSERT INTO Customer(nic,licenseNumber,FName,MName,LName,address,telephone,userId) VALUES('$this->nic','$this->licenseNumber','$this->FName','$this->MName','$this->LName','$this->address','$this->telephone','$last_id')";
		                
			if(!mysqli_query($conn,$sql))
                    		die("Failed to create Customer :" . mysqli_error($conn));
		}
	}
?>
