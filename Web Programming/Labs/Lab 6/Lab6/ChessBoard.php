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
  <table width="300px" cellspacing="0px" cellpadding="0px" border="2px">

    <?php
    for($row=1;$row<=8;$row++)
    {
      echo "<tr>";
      for($col=1;$col<=8;$col++)
      {
        $total=$row+$col;
        if($total%2==0)
        {
          echo "<td height=40px width=40px bgcolor=#FFFFFF></td>";
        }
         else
        {
              echo "<td height=40px width=40px bgcolor=#000000></td>";
        }
      }
      echo "</tr>";
    }

   ?>
  </table>
  <?php echo"<br>"; ?>
  <?php echo"<br>"; ?>
<?php include 'Footer.php'; ?>
</body>
</html>
