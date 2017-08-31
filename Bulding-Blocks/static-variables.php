<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Static Variables</title>
  </head>
  <body>
    <?php
      function NormalVar() {
        $value = 1;
        echo $value. "<br />";
        $value += 1;
      }
      Normalvar();
      Normalvar();
      Normalvar(); echo "<hr />";

      // Static variable
      function StaticVar() {
        static $value = 1; // defined with key word static.
        echo $value. " static <br />";
        $value += 1;
      }
      StaticVar();
      StaticVar();
      StaticVar();
    ?>
  </body>
</html>
