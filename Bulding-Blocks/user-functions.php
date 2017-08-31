<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Defined Function</title>
  </head>
  <body>
    <?php
      //NOTES: Functions in PHP cannot be redeclared. Function name are not case sensitive.

      function Welcome() {
        echo "Welcome to PHP course <br />";
      }
      //Welcome(); echo "<hr />";

      function Add() {
        $a = 5;
        $b = 2;
        $c = $a + $b;
        echo "Addition is {$c} <br />";
      }
      //Add(); echo "<hr />";

      function AddP($x, $y) {
        $Result = $x + $y;
        echo "Addition using function parameter is: {$Result}";
      }
      //Addp(4, 5); echo "<hr />";

      function Addition_Return($p, $q) {
        $f = $p + $q;
        return $f;
      }
      // $total = Addition_Return(25, 25);
      // $total_1 = Addition_Return($total, 30);
      // echo $total_1; echo "<hr />";
    ?>
  </body>
</html>
