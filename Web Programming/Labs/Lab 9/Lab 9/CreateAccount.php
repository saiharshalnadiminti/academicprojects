<?php
	session_start();
	$host = "localhost";
	$username = "saiharsh_harshal";
	$password = "Harshal@123";
	$database = "saiharsh_cst8238";
	include("Header.php"); 
    	include("Menu.php"); 
	$conn = new mysqli($host, $username, $password, $database);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$pnum = $_POST["pnum"];
	$sin = $_POST["sin"];
	$pass = $_POST["pass"];
	
	$sql = "INSERT INTO Employee VALUES (null, '$fname', '$lname', '$email', '$pnum', '$sin', '$pass');";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	if(isset($_POST['btnSubmit'])){
		
		if( $_POST['fname'] != ""){
			$_SESSION["firstName"] = $_POST["fname"];
			header("Location: ViewAllEmployees.php");
		}
		
		if($_POST['lname'] != ""){
			$_SESSION["lastname"] = $_POST["lname"];
			header("Location: ViewAllEmployees.php");
		}
		
		if($_POST['email'] != ""){
			$_SESSION["email"] = $_POST["email"];
			header("Location: ViewAllEmployees.php");
		}
		
		if($_POST['pnum'] != ""){
			$_SESSION["phnum"] = $_POST["pnum"];
			header("Location: ViewAllEmployees.php");
		}

		if($_POST['sin'] != ""){
			$_SESSION["sin"] = $_POST["sin"];
			header("Location: ViewAllEmployees.php");
		}
		
		if($_POST['pass'] != ""){
			$_SESSION["pswd"] = $_POST["pass"];
			header("Location: ViewAllEmployees.php");
		}
		
	}

?>

<html>

<head>
    <title> CreateAccount </title>
    <link rel="stylesheet" type="text/css" href="style.php">
</head>

<body>
    
    <div id="content">
        <form action="" method="POST">
            <fieldset style="display: inline-block;">
                <b>Create Your New Account</b><br>&nbsp;</br>
                <label> First name: </label>
                <input type="text" name="fname" id="fname"><br />

                <label> Last name: </label>
                <input type="text" name="lname" id="lname"><br />

                <label> Email Address: </label>
                <input type="email" name="email" id="email"><br />

                <label> Phone Number: </label>
                <input type="number" name="pnum" id="pnum"><br />

                <label> SIN: </label>
                <input type="number" name="sin" id="sin"><br />

                <label> Password: </label>
                <input type="password" name="pass" id="pass"><br /><br />

                <input type="submit" name="btnSubmit" id="btnSubmit" value="Submit Information">
                &nbsp;
                <input type="reset" name="btnReset" id="btnReset" value="Reset">

            </fieldset>


        </form>

    </div>
    <?php include("Footer.php"); ?>
</body>

</html>