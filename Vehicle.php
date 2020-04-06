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
        function selectAllVehicles(){

        }

        function selectVehicle(){

        }

        function insertVehicle(){
            global $conn;

            $sql = "INSERT INTO Vechile(regNo,make,model,year,color,costPerDay,costPerWeek,costPerMonth) VALUES('$this->regNo','$this->make','$this->model','$this->year','$this->color','$this->costPerDay','$this->costPerWeek','$this->costPerMonth')";
            if(!mysqli_query($conn,$sql))
           		die("Failed to create Vehicle :" . mysqli_error($conn));        
        }

        function updateVehicle(){

        }

        function deleteVehicle(){

        }
    }
?>