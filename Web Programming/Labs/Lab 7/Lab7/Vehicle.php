<html>
	<head>
		<title>  </title>
		<link rel="stylesheet" type="text/css" href="style.php">
	</head>
	<body>
		<?php include("Header.php"); ?>
		<?php include("Menu.php"); ?>
			<?php

				interface Vehicle{

					public function displayVehicleInfo();
				}

				class LandVehicle implements Vehicle{

					protected $make;
					protected $model;
					protected $year;
					protected $price;

					function __construct($make, $model, $year, $price){
						$this->make = $make;
						$this->model = $model;
						$this->year = $year;
						$this->price = $price;
					}

					public function displayVehicleInfo(){
						 echo "<b>Make:</b> ",$this->make,", <b>Model:</b> ",$this->model,", <b>Year:</b> ",$this->year,", <b>Price</b>: ",$this->price;
					}

				}

				class Car extends LandVehicle{

					private $speedLimit;

					function __construct($make, $model, $year, $price, $speedLimit){

						parent::__construct($make, $model, $year, $price);
						$this->speedLimit = $speedLimit;
					}

					public function displayVehicleInfo(){
						parent::displayVehicleInfo(); echo ", <b>Speed Limit: </b>",$this->speedLimit,"<br/><br/>";
					}
				}

				class WaterVehicle implements Vehicle{

					protected $make;
					protected $model;
					protected $year;
					protected $price;

					function __construct($make, $model, $year, $price){
						$this->make = $make;
						$this->model = $model;
						$this->year = $year;
						$this->price = $price;
					}

					public function displayVehicleInfo(){
						 echo "<Tb>Make:</b> ",$this->make,", <b>Model:</b> ",$this->model,", <b>Year:</b> ",$this->year,", <b>Price</b>: ",$this->price;
					}

				}

				class Boat extends WaterVehicle{

					private $boatCapacity;

					function __construct($make, $model, $year, $price, $boatCapacity){

						parent::__construct($make, $model, $year, $price);
						$this->boatCapacity = $boatCapacity;
					}

					public function displayVehicleInfo(){
						parent::displayVehicleInfo(); echo ", <b>Boat Capacity:</b> ",$this->boatCapacity,"<br/><br/>";
					}
				}

				echo "<br/><br/><br/>";

				echo "<fieldset style='display: inline-block;'>";
				echo "<h2>Car</h2>";

				$Car1 = new Car("Toyota","Camry","1992","2000","180");
				$Car1->displayVehicleInfo();

				$Car2 = new Car("Honda","Accord","2002","6000","200");
				$Car2->displayVehicleInfo();

				echo "</fieldset>";
				echo "<br/><br/><br/>";

				echo "<fieldset style='display: inline-block;'>";
				echo "<h2>Boat</h2>";
				$boat1 = new Boat("Mitsubishi","Turbo","1999","20000","18");
				$boat1->displayVehicleInfo();
				$boat2 = new Boat("Hyundai","XT","2012","26000","8");
				$boat2->displayVehicleInfo();

				echo "</fieldset>";


			?>
		</div>
		<?php include("Footer.php"); ?>
	</body>
</html>
