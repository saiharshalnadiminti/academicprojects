    <?php include 'Header.php' ; ?>
    <?php

session_start();

if (isset($_SESSION["firstName"])) {
    echo "First Name: " .$_SESSION["firstName"];
    echo "<br/>";
    echo "Last Name: " .$_SESSION["secondName"];
    echo "<br/>";
    echo "Number: " .$_SESSION["number"];
    echo "<br/>";
    echo "Email Address: " .$_SESSION["address"];
    echo "<br/>";
    echo "Position: " .$_SESSION["position"];
    echo "<br/>";
    echo "Project/s: " .$_SESSION["project"];
    echo "<br/>";
}

?>


    <html>

    <head>
        <title>Session 2</title>
        <link rel="stylesheet" type="text/css" href="style.php" />
    </head>

    <body>

    </body>

    </html>
    <?php include 'Footer.php' ; ?>