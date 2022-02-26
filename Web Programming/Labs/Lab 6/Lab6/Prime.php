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
  <?php
  error_reporting(0);
  $a=$_POST['low'];
  $b=$_POST['up'];
  if(isset($_POST['clear']))
  {
    $a="";
    $b="";
  }
  ?>
  <BR>
    <form method="post" action="Prime.php" name="prime_me">
      Range 1:   <input type="text" name="low"
      size="10" value="<?php echo $a; ?>" autofocus>

      Range 2:   <input type="text" name="up"
      size="10" value="<?php echo $b; ?>">
      <br><br>
      <input type="submit" name="checker" value="Generate">

    </form>
    <div class="prime">
      <?php
      if(isset($_POST['checker']))
      {
        $a=$_POST['low'];
        $b=$_POST['up'];
        $flag=0;
        for($a;$a<$b;$a++)
        {
          for($j=2;$j<$a;$j++)
          {
            if($a%$j==0)
            {
              $flag=1;
            }
          }
          if($flag==0)
          {
            echo " ".$a." is a prime number ";
            echo "<br>";
          }
          $flag=0;
        }
      }
      echo"<br>";
      echo"<br>";

      ?>

    </div>

    <?php include 'Footer.php'; ?>
  </body>
  </html>
