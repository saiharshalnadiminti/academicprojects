
<html>
<head><title></title></head>
<body>
  <link rel="stylesheet" type="text/css" href="style.php">

  <?php
  include 'Header.php';
  include 'Menu.php';
  ?>

  <div id="content">
    <h2>No Key Array - Output using var_dump</h2>
    <?php
    $noKeyArray = [10,20,30,40];
    var_dump($noKeyArray);
    ?>

    <br><h2>No Key Array - Output using foreach loop</h2>

    <?php
    foreach($noKeyArray as $key => $number){

      echo "key: ". $key . "	value: " . $number . ",	Key data type:  integer <br>"; ;
    }
    ?>

    <br><h2>String Key Array - Output using var_dump</h2>

    <?php
    $StringKeyArray = ["item1", "item2"];
    var_dump($StringKeyArray);
    ?>

    <br><h2>string Key Array - Output using foreach loop</h2>

    <?php
    foreach($StringKeyArray as $key => $letter){

      echo "key: ". $key . "	value: " . $letter . ",	Key data type:  string <br>"; ;
    }
    ?>

    <h2>Integer Key Array - Output using var_dump</h2>

    <?php
    $intKeyArray = ["item1","item2","item3"];
    var_dump($intKeyArray);
    ?>

    <br><h2>Integer Key Array - Output using foreach loop</h2>

    <?php
    foreach($intKeyArray as $key => $number){

      echo "key: ". $key . "	value: " . $number . ",	Key data type:  integer <br>"; ;
    }
    ?>

    <h2>Mixed Key Array - Output using var_dump</h2>

    <?php
    $mixedKeyArray = ["item1","item2","item8","item4","item5","item6","item7"];
    var_dump($mixedKeyArray);
    ?>

    <br><h2>Integer Key Array - Output using foreach loop</h2>

    <?php
    foreach($mixedKeyArray as $key => $number){

      echo "key: ". $key . "	value: " . $number . ",	Key data type:  integer <br>"; ;
    }
    ?>

    <br><h2>Multi-dimensional Array - Output using var_dump</h2>

    <?php
    $multiDimensionalArray = [(10),(20),(30),(40)];
    var_dump($multiDimensionalArray);
    ?>


    <br><h2>Multi-dimentional Array - Output using foreach loop</h3>level: 1, key: 0<br>key: 0, value: Item1, key datatype: integer<br>key: 1, value: Item2, key datatype: integer<br>key: 2, value: Item3, key datatype: integer<br>level: 1, key: 1<br>key: 0, value: Item1, key datatype: integer<br>key: 1, value: Item2, key datatype: integer<br>key: 2, value: Item3, key datatype: integer<br>
    </div>
    <?php include("Footer.php"); ?>

  </body>
  </html>
