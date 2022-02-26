<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.php">
</head>
<body>
  <?php include 'Header.php'; ?>
  <?php include 'Menu.php'; ?>
  <pre>
<?php
echo("</br>");
echo("</br>");
$var = 5;
for ($i = 0; $i < $var; $i++)
{
    for ($j = 0; $j < $var; $j++)
    {
        if ($i == 0 || $i == $var - 1)
        {
            echo('*');
        }
        elseif ($j == 0 || $j == $var-1)
        {
            echo('*');
        }
        else
        {
            echo(' ');
        }
    }
    echo("</br>");
}
?>
</pre>


  <?php include 'Footer.php'; ?>
</body>
</html>
