<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Numbers</title>
  </head>
  <body>
    <?php
      $FirstNumber = 3;
      $SecondNumber = 4;
      $ThirdNumber = 3.65478;
    ?><br>
    <?php echo $ThirdNumber + 9 - 6 ?><br>
    <?php echo 3.1/6; ?><br>
    <?php
     // cannot divide number with 0;
     echo 7/0; ?><br>
    Ceil: <?php echo ceil($ThirdNumber); ?><br>
    Floor: <?php echo floor($ThirdNumber); ?><br>
    <?php
      // is_int represented by 1 for true and 0 or nothing for false
     echo "is {$FirstNumber} : interger". is_int($FirstNumber); ?><br>
    <?php echo "is {$ThirdNumber} : float". is_float($ThirdNumber); ?><br>
    <?php echo "is {$ThirdNumber} : Numeric". is_numeric($ThirdNumber); ?><br>
    Decible to Binary: <?php echo decbin(3); ?><br>
    Binary to Decimal: <?php echo bindec(11); ?><br>
    Sqrt: <?php echo sqrt(8); ?><br>
    Absolute: <?php echo abs(-50+100); ?><br>
    Power: <?php echo pow(2,10); ?><br>
    Modulus: <?php echo fmod(15,7); ?><br>
    Random within 500 and 1600: <?php echo rand(500, 1600); ?><br>
    <?php echo $SecondNumber += 2; ?>
  </body>
</html>
