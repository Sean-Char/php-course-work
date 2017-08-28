<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array Functions</title>
  </head>
  <body>
    <pre>
      <?php
        $color = array("red", "green", "blue");
        array_pop($color); // removes last value from array.
        print_r($color);
        array_push($color, "black", "White", "Pink");
        print_r($color);
      ?><br>
    </pre>
    <pre>
      <?php $Numbers = array(13,45,6,89,100,15,12,789,1000);?><br>
        <?php echo print_r($Numbers); ?><br>

        Count: <?php // count starts at 1
         echo count($Numbers);
        ?><br>
      Max: <?php echo max($Numbers); ?><br>
      Min: <?php echo min($Numbers); ?><br>
      Yes/No: <?php echo in_array(89, $Numbers); ?><br>
      Sort: <?php echo sort($Numbers);
        echo print_r($Numbers); ?><br>
      Reverse Sort: <?php echo rsort($Numbers);
        echo print_r($Numbers)?><br>

      Implode: <?php // Works like .join in javascript: array to string.
      $Quote = array("Never", "Give", "Up"); ?><br>
      <?php echo implode(" ",$Quote); ?><br>

      Explode: <?php // Works like split in javascript: string to array.
      $Quote = "Never give up";
        print_r(explode(" ",$Quote));
      ?><br>

    </pre>


  </body>
</html>
