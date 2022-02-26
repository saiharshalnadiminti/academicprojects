<html>
	<head>
		<title>  </title>
		<link rel="stylesheet" type="text/css" href="style.php">
	</head>
	<body>
		<?php include("Header.php"); ?>
		<?php include("Menu.php"); ?>
		<div>
			<form action="" method="post">
				<legend align = "center"><h1>Currency Convertor</h1></legend>
				<h4>Convert: <input type="number" name="con"> </h4>

				<h4><select id="currency1" name="base">
					<option value="CAD">Canadian Dollar</option>
					<option value="NZD">New Zealand Dollar</option>
					<option value="USD">US Dollar</option>
				</select></h4>

				<h4> to </h4>

				<h4><select id="currency2" name="dest">
					<option value="CAD">Canadian Dollar</option>
					<option value="NZD">New Zealand Dollar</option>
					<option value="USD">US Dollar</option>
				</select></h4>

				<input type="submit" name="btnConvert"value="Convert">
				<br/>
				<br/>
			</form>

			<?php

				$currencies = array("CAD" => "Canadian Dollar","NZD" => "New Zealand Dollar","USD" => "US Dollar");
				$rates = array(	"CAD" => 0.97645,"NZD" => 1.20642,"USD" => 1.0);

				if(isset($_POST['btnConvert'])){
					$con = $_POST['con'];
					$base = $_POST['base'];
					$dest = $_POST['dest'];

					if($con == ""){
					echo("Please enter an input");
					}

					else{
						echo("<h2>Conversions Results</h2>");
						     $converted_output = round(($con/$rates[$base]) * $rates[$dest],2);
                 echo "<h4>$con $currencies[$base] converts to $converted_output $currencies[$dest]</h4>";
										}

				}

			?>
		</div>
		<?php include("Footer.php"); ?>
	</body>
</html>
