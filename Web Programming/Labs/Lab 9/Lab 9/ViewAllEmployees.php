<?php
	session_start();
	$host = "localhost";
	$username = "saiharsh_harshal";
	$password = "Harshal@123";
	$database = "saiharsh_cst8238";


	$conn = new mysqli($host, $username, $password, $database);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
		
	$sql = "Select * from Employee;";

	$result = $conn->query($sql);

?>
<html>

<head>
    <title> Login </title>
    <link rel="stylesheet" type="text/css" href="style.php">
</head>

<body>
    <?php include("Header.php"); ?>
    <?php include("Menu.php"); ?>
    <div id="content">
        <form action="" method="POST">
            <fieldset style="display: inline-block;">

                <?php
				echo"<h1>Session State Data</h1>";
				
				if(isset($_SESSION["firstName"])){
					echo "<b>First Name: </b>" . $_SESSION['firstName'] . "<br/><br/>";
				}else {
					echo "<b>First Name: </b> Not provided <br/><br/>";
				}
				
				if(isset($_SESSION["lastname"])){
					echo "<b>Last Name: </b>" . $_SESSION['lastname'] . "<br/><br/>";
				}else {
					echo "<b>Last Name: </b> Not provided <br/><br/>";
				}
				
				if(isset($_SESSION["email"])){
					echo "<b>Email: </b>" . $_SESSION['email'] . "<br/><br/>";
				}else {
					echo "<b>Email: </b> Not provided <br/><br/>";
				}
				
				if(isset($_SESSION["phnum"])){
					echo "<b>Phone Number: </b>" . $_SESSION['phnum'] . "<br/><br/>";
				}else {
					echo "<b>Phone Number: </b> Not provided <br/><br/>";
				}
				
				if(isset($_SESSION["sin"])){
					echo "<b>SIN: </b>" . $_SESSION['sin'] . "<br/><br/>";
				}else {
					echo "<b>SIN: </b> Not provided <br/><br/>";
				}
				
				if(isset($_SESSION["pswd"])){
					echo "<b>Password: </b>" . $_SESSION['pswd'] . "<br/><br/>";
				}else {
					echo "<b>Password: </b> Not provided <br/><br/>";
				}
				
			?>
            </fieldset>

            <fieldset style="display: inline-block;">
                <table>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email Address </th>
                        <th>Phone Number </th>
                        <th>SIN </th>
                        <th>Password </th>
                    </tr>

                    <?php
				if($result->num_rows > 0){
					while($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>" . $row["FirstName "] . "</td>";
						echo "<td>" . $row["LastName "] . "</td>";
						echo "<td>" . $row["EmailAddress "] . "</td>";
						echo "<td>" . $row["TelephoneNumber "] . "</td>";
						echo "<td>" . $row["SocialInsuranceNumber "] . "</td>";
						echo "<td>" . $row["PASSWORD "] . "</td>";
						echo "</tr>";
					}
				}else{
					echo "No Data in the Table";
				}
				
			?>
                </table>
            </fieldset>

        </form>

    </div>
    <?php include("Footer.php"); ?>
</body>

</html>