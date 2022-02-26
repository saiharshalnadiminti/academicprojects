<?php
	session_start();
	$host = "localhost";
	$username = "saiharsh_harshal";
	$password = "Harshal@123";
	$database = "saiharsh_cst8238";

	     include("Header.php"); 
	     include("Menu.php"); 

	if(isset($_POST['btnLogin'])){
		$email = $_POST["email"];
		$pass = $_POST["pass"];
		
		$conn = new mysqli($host, $username, $password, $database);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "Select * from Employee where EmailAddress = '$email';";
		
		$result = $conn->query($sql);
		
		if($result->num_rows > 0){
			$row = $result->fetch_assoc();
			if($row["EmailAddress"] == $email){
				
					
					$_SESSION["email"] = $_POST["email"];	
					$_SESSION["pswd"] = $_POST["pass"];
					header("Location: http://saiharshalnadiminti.com/CST8238/Lab9/ViewAllEmployees.php");
				                echo "Login Successful";
			}
			else{
				echo "Email or Password is incorrect.";
			}
		}else{
			echo "Email or Password is incorrect.";
		}
		$conn->close();
	}
	
?>
<html>

<head>
    <title> Login </title>
    <link rel="stylesheet" type="text/css" href="style.php">
</head>

<body>
    
    <div id="content">
        <form action="" method="POST">
            <fieldset style="display: inline-block;">

                <b>Login</b><br>&nbsp;</br>

                <label> Email Address: </label>
                <input type="email" name="email" id="email"><br />

                <label> Password: </label>
                <input type="password" name="pass" id="pass"><br /><br />

                <input type="submit" name="btnLogin" id="btnLogin" value="Login">

            </fieldset>

        </form>

    </div>
    <?php include("Footer.php"); ?>
</body>

</html>