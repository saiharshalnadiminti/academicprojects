<?php
if (isset($_POST["firstNameTextBox"]) && isset($_POST["sName"]) && isset($_POST["num"]) && isset($_POST["address"]) && isset($_POST["position"]) && isset($_POST["project"])) {
    $firstName = $_POST["firstNameTextBox"];
    $sName = $_POST["sName"];
    $num = $_POST["num"];
    $address = $_POST["address"];
    $position = $_POST["position"];
    $project = $_POST["project"];
} else {
    $firstName = "Was not set by the form";
    $sName = "Was not set by the form";
    $num = "Was not set by the form";
    $address = "Was not set by the form";
    $position = "Was not set by the form";
    $project = "Was not set by the form";
}
    include 'Header.php' ; 

echo <<<_END
        
<html>
	<head>
		<title>Input</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.php" />
	</head>
	
	<body>
   
    <div class="row">
    <div class="col">
    <div class="leftside">
		<form method="post">
		    Employee First Name: 
			<input type="te<xt" name="firstNameTextBox" value="Put your name here" /><br/>
            Employee Last Name:
			<input type="text" name="sName" value="Put your name here" /><br/> 
			Employee Number:
			<input type="text" name="num" value="Put your number here" /><br/> 
			Employee Email:
			<input type="text" name="address" value="Put your email here" /><br/> 
			Employee Position:
			<br/>
			<input type="radio" id="manager" name="position" value="Manger">
			<label for="manager">Manager</label><br>
			<input type="radio" id="tLead" name="position" value="Lead">
			<label for="tLead">Team Lead</label><br>
			<input type="radio" id="iDeveloper" name="position" value="Developer">
			<label for="iDeveloper">IT Developer</label><br>
			<input type="radio" id="iAnalyst" name="position" value="Analyst">
			<label for="iAnalyst">IT Analyst</label><br>
			Employee Project/s:
			<label for="project">Choose a project:</label>
			<br/>
			  <select name="project" id="project" multiple>
              <option value="ProjectA">ProjectA</option>
              <option value="ProjectB">ProjectB</option>
              <option value="ProjectC">ProjectC</option>
              <option value="ProjectD">ProjectD</option>
            </select>
			<input type="submit" />
		</form>
    
		<br />
        </div>
    </div>
         <div class="col">
    <div class="rightside">
   
		      Employee First Name: $firstName
               <br/>
              Employee Last name: $sName
                <br/>
                 Employee Number: $num
                <br/>
                 Employee Email: $address
                <br/>
                 Employee Position: $position
                <br/>
                 Employee Project: $project
                <br/>
    </div>
    </div>
    </div>
	</body>
</html>

_END;
    include 'Footer.php' ; 


?>