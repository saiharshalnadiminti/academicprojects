<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="style.php">
</head>

<body>
    <?php $firstName="Saiharshal " ;$middleName="Harikishan " ;$lastName="Nadiminti " ;define("STUDENTNO" , '040982223' );$string1="Hello World!!" ;$string2="This is the first time I am using PHP!!" ;$finalString= $string1.$string2?>
    <?php include 'Header.php' ; ?>
    <?php include 'Menu.php' ; ?>
    <div class="content">
        <?php echo "<br>" ; ?>
        <?php echo "<b>First Name: </b>" . $firstName; ?>
        <?php echo "<br>" ; ?>
        <?php echo "<b>Middle Name: </b>" . $middleName; ?>
        <?php echo "<br>" ; ?>
        <?php echo "<b>Last Name: </b>" . $lastName; ?>
        <?php echo "<br>" ; ?>
        <?php echo "<b>Student Number:</b>" . STUDENTNO; ?>
        <?php echo "<br>" ; ?>
        <?php echo "<br>" ; ?>
        <?php echo $finalString; ?>
    </div>
    <?php echo "<br>" ; ?>
    <?php include 'Footer.php' ; ?>
</body>

</html>