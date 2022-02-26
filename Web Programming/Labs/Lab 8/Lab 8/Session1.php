<?php

session_start();

if (isset($_POST["fName"])) {
    $_SESSION["firstName"] = $_POST["fName"];;
    $_SESSION["secondName"] = $_POST["sName"];
    $_SESSION["number"] = $_POST["num"];;
    $_SESSION["address"] = $_POST["address"];
    $_SESSION["position"] = $_POST["position"];
    $_SESSION["project"] = $_POST["project"];
    header('Location: Session2.php');
    exit;
}

?>
<?php include 'Header.php' ; ?>
<html>

<head>
    <title>Session 1</title>
    <link rel="stylesheet" type="text/css" href="style.php" />
</head>

<body>


    <form method="post">
        Employee First Name: <input type="text" name="fName" value="Put your name here" /><br /> Employee Last Name:
        <input type="text" name="sName" value="Put your name here" /><br /> Employee
        Number: <input type="text" name="num" value="Put your number here" /><br />
        Employee Email: <input type="text" name="address" value="Put your email here" /><br /> Employee Position: <br />
        <input type="radio" id="manager" name="position" value="Manger"> <label for="manager">Manager</label><br> <input
            type="radio" id="tLead" name="position" value="Lead"> <label for="tLead">Team Lead</label><br>
        <input type="radio" id="iDeveloper" name="position" value="Developer">
        <label for="iDeveloper">IT Developer</label><br> <input type="radio" id="iAnalyst" name="position"
            value="Analyst"> <label for="iAnalyst">IT
            Analyst</label><br> Employee Project/s: <label for="project">Choose a
            project:</label> <br /> <select name="project" id="project" multiple>
            <option value="ProjectA">ProjectA</option>
            <option value="ProjectB">ProjectB</option>
            <option value="ProjectC">ProjectC</option>
            <option value="ProjectD">ProjectD</option>
        </select> <input type="submit" />
    </form>
</body>

</html>

<?php include 'Footer.php' ; ?>