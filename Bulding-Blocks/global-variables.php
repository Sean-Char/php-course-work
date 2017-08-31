<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Global Variables</title>
  </head>
  <body>
    <?php
      $MyNumber = 456456; // local scope
      function Add() {
        global $MyNumber; // explicite use global key word
        $a = 5;
        $b = 2;
        $c = $a + $b;
        echo "New Global Addition ".($MyNumber + $c)."<br />";
        echo "Addition is {$c}<br />";
      }

      Add();
    ?>
  </body>
</html>
