<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>If statements</title>
  </head>
  <body>
    <?php
      $Weather = "Rany";
      if ($Weather == "Sunny") {
        echo "Weather is pleasant <br />";
      }
      else if ($Weather == "Cloudy") {
        echo "Weather is not pleasant.<br />";
      }
      else if ($Weather == "Rainy") {
        echo "Weather is raining. <br />";
      } else {
        echo "Its hard to tell <br />";
      }
    ?><hr>

    <?php
      $Bought_Product = false;
      if ($Bought_Product) {
        echo "<h1>Thank You</h1>";
        echo "<p>Your product will be dispatch</p>";
      } else {
        echo "Buy something please!";
      }
    ?><hr>

    <?php
      $a = 4;
      $b = 3;
      $c = "C your way out";
      if ($b < 5 && $a > 0) {
        $c = $a / $b;
      }
        echo $c;
    ?>
  </body>
</html>
