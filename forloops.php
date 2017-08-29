<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>loops</title>
  </head>
  <body>
    <?php
      for ($i=1; $i <= 10; $i += 1) {
        echo " {$i} is printing on screen <br />";
      }
    ?><hr>

    <?php $N = 2;
      for ($i=1; $i <= 10 ; $i += 1) {
        $results = $N * $i;
        echo $N . " * " . $i . "=" . $results . "<br />";
      }
    ?>
  </body>
</html>
