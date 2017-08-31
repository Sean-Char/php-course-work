<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Super Global Variables</title>
  </head>
  <body>
    <?php
      // Super Global Variables
      // $GLOBALS, $_SERVER , $_REQUEST , $_FILES , $_SESSION , $_ENV

      // 3 MOST IMPORTANT SUPER GLOBALS
      // $_GET -> eg Links: searches, $_POST -> eg contact us form, $_COOKIE -> results by previous traks.
    ?>

    <?php
      $x = 75;
      $y = 25;
      function addition() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
      }
      addition();
      print_r($GLOBALS);
      echo "<br />";
      echo $z;
    ?>
  </body>
</html>
