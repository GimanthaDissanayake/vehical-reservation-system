<?php
    class Vehicle{
        //properties
        private $regNo;
        private $make;
        private $model;
        private $year;
        private $color;
        private $costPerDay;
        private $costPerWeek;
        private $costPerMonth;

        //constructor
        function __construct(){
            $get_arguments       = func_get_args();
			$number_of_arguments = func_num_args();

			if($number_of_arguments > 0)
				$this->__construct2($get_arguments[0],$get_arguments[1]);
        }

        function __construct2($regNo,$make,$model,$year,$color,$costPerDay,$costPerWeek,$costPerMonth){
            $this->regNo = $regNo;
            $this->make = $make;
            $this->model = $model;
            $this->year = $year;
            $this->color = $color;
            $this->costPerDay = $costPerDay;
            $this->costPerWeek = $costPerWeek;
            $this->costPerMonth = $costPerMonth;
        }

        //methods
        public function selectAllVehicles(){
            global $conn;

			$sql = "SELECT * FROM Vehcile WHERE isDeleted='0'";
			$result = mysqli_query($conn, $sql);
			if(!$result)
				die("Failed to select Vehicles :" . mysqli_error($conn));
			return $result;
        }

        public function selectVehicle($vehicleId){
            global $conn;

			$sql = "SELECT * FROM Vehicle WHERE vehicleId='$vehicleId' AND isDeleted='0'";
			$result = mysqli_query($conn,$sql);
			if(!$result)
				die("Failed to select Vehicle :" . mysqli_error($conn));
			return mysqli_fetch_assoc($result);
        }

        public function insertVehicle(){
            global $conn;

            $sql = "INSERT INTO Vechile(regNo,make,model,year,color,costPerDay,costPerWeek,costPerMonth) VALUES('$this->regNo','$this->make','$this->model','$this->year','$this->color','$this->costPerDay','$this->costPerWeek','$this->costPerMonth')";
            if(!mysqli_query($conn,$sql))
           		die("Failed to create Vehicle :" . mysqli_error($conn));        
        }

        public function updateVehicle($id,$regNo,$make,$model,$year,$color,$costPerDay,$costPerWeek,$costPerMonth){
            global $conn;

            $this->regNo = $regNo;
            $this->make = $make;
            $this->model = $model;
            $this->year = $year;
            $this->color = $color;
            $this->costPerDay = $costPerDay;
            $this->costPerWeek = $costPerWeek;
            $this->costPerMonth = $costPerMonth;

            $sql = "UPDATE Vehicle SET regNo='$regNo', make='$make', model='$model', year='$year', color='$color', costPerDay='$costPerDay', costPerWeek='$costPerWeek', costPerMonth='$costPerMonth' WHERE vehicleId='$id'";

			if(!mysqli_query($conn,$sql))
          		die("Failed to update Vehicle :" . mysqli_error($conn));
        }

        public function deleteVehicle($id){
            global $conn;

            $sql = "UPDATE Vehicle SET isDeleted='1' WHERE vehicleId='$id'";
			if(!mysqli_query($conn,$sql))
				die("Failed to delete Customer :" . mysqli_error($conn));			
        }
    }
?>