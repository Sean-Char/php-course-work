<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inside Job | Pointers</title>
  </head>
  <body>
    <?php $Numbers = array(2,25,45,60,168,500,999);
      print_r($Numbers);
    ?><hr>
    <?php // points to the first index
      echo current($Numbers) ."<br />";
      // tells the pointer to move to the next index
      next($Numbers);
      // points to the next index.
      echo current($Numbers) ."<br />";
      next($Numbers);
      echo current($Numbers) ."<br />";
      next($Numbers);
      echo current($Numbers) ."<br />";
      reset($Numbers);
      echo current($Numbers) ."<br />";
      end($Numbers);
      echo current($Numbers) ."<br />";
    ?>

  </body>
</html>
