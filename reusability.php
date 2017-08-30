<?php
  //include("user-functions.php"); -> able to use require and include.
  require("user-functions.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reusability</title>
  </head>
  <body>
    <h1>My Name</h1>
    <?php
      Welcome();
      echo Addp(25, 56);
    ?>
  </body>
</html>
