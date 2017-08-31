<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP FILE</title>
  </head>
  <body>
    <?php
      print_r($_POST);
    ?>

    <?php
      // $Username = $_POST["Username"];
      // $Password = $_POST["Password"];
      // $Submit = $_POST["Submit"];
      // if (isset($_POST['Submit'])) {
      //   echo "<h2>Sucessfull Login</h2><br />";
      //   echo "<h2>Welcome: {$Username}</h2>";
      // }
      //
      // if (isset($Username) && !empty($Username)) {
      //   echo "Username is set with the name of: {$Username}<br />";
      // } else {
      //   echo "No Username detected <br />";
      // }
      //
      // if (isset($Password) && !empty($Password)) {
      //   echo "Password: {$Password}<br />";
      // } else {
      //   echo "No Password detected <br />";
      // }

      // SETTING DEFAULTS
      if (isset($_POST["Username"])) {
        $Username = $_POST["Username"];
        echo "$Username <br />";
      } else {
        $Username = "";
      }

      if (isset($_POST["Password"])) {
        $Password = $_POST["Password"];
        echo "$Password <br />";
      } else {
        $Password = "";
      }
    ?>
  </body>
</html>
