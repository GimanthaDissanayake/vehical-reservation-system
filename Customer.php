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
		public function selectAllCustomers(){
			global $conn;

			$sql = "SELECT * FROM Customer WHERE isDeleted='0'";
			$result = mysqli_query($conn, $sql);
			if(!$result)
				die("Failed to select Customer :" . mysqli_error($conn));
			return $result;
		}

		public function selectCustomer($customerId){
			global $conn;

			$sql = "SELECT * FROM Customer WHERE customerId='$customerId' AND isDeleted='0'";
			$result = mysqli_query($conn,$sql);
			if(!$result)
				die("Failed to delete Customer :" . mysqli_error($conn));
			return mysqli_fetch_assoc($result);
		}

		public function insertCustomer($username,$password){
			global $conn;

			$u = new User($username,$password);
			$u->insertUser();

			$last_id = mysqli_insert_id($conn);

			$sql = "INSERT INTO Customer(nic,licenseNumber,FName,MName,LName,address,telephone,userId) VALUES('$this->nic','$this->licenseNumber','$this->FName','$this->MName','$this->LName','$this->address','$this->telephone','$last_id')";
		                
			if(!mysqli_query($conn,$sql))
           		die("Failed to create Customer :" . mysqli_error($conn));
		}

		public function updateCustomer($id,$nic,$licenseNumber,$FName,$MName,$LName,$address,$telephone){
			global $conn;

			$this->nic = $nic;
			$this->licenseNumber = $licenseNumber;
			$this->FName = $FName;
			$this->MName = $MName;
			$this->LName = $LName;
			$this->address = $address;
			$this->telephone = intVal($telephone);

			$sql = "UPDATE Customer SET nic='$nic', licenseNumber='$licenseNumber', FName='$FName', MName='$MName', LName='$LName', address='$address', telephone='$telephone' WHERE CustomerId='$id'";

			if(!mysqli_query($conn,$sql))
          		die("Failed to update Customer :" . mysqli_error($conn));
		}

		public function deleteCustomer($id){
			global $conn;

			$sql = "SELECT userId FROM Customer WHERE customerId='$id'";
			$result = mysqli_query($conn,$sql);
			if(!$result)
				die("Failed to delete Customer :" . mysqli_error($conn));
			$row = mysqli_fetch_row($result);
			$uid = $row[0];

			$sql = "UPDATE Customer SET isDeleted='1' WHERE CustomerId='$id'";
			if(!mysqli_query($conn,$sql))
				die("Failed to delete Customer :" . mysqli_error($conn));
							
			$sql = "UPDATE User SET isDeleted='1' WHERE UserId='$uid'";				
			if(!mysqli_query($conn,$sql))
				die("Failed to delete Customer :" . mysqli_error($conn));
		}
	}
?>
