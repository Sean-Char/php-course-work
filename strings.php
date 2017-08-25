<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Strings</title>
  </head>
  <body>
    <?php
      //String functions
      $phrase1 = "students who come late";
      $phrase2 = "in class sit in last with Rock";
      $combine = $phrase1;
      $combine .= $phrase2;
      echo "Original full string: $combine <br>";
    ?> <hr>
      Uppercase first: <?php echo ucfirst($combine); ?><br>
      Uppercase words: <?php echo ucwords($combine); ?><br>
      Lowercase: <?php echo strtolower($combine); ?><br>
      Uppercase: <?php echo strtoupper($combine); ?><br>
      <hr>
        Repeat: <?php echo str_repeat($combine, 3); ?><br>
        Make substring from one point to another: <?php echo substr($combine, 5, 10); ?><br>
        Find position of any specific word: <?php echo strpos($combine, "come"); ?><br>
        Find character: <?php echo strchr($combine, "R"); ?><br>
      <hr>
        Total length of String: <?php echo strlen($combine); ?><br>
        Trim: <?php echo "A" . trim(" B C D ") . "E"; ?><br>
        Find specific and show after: <?php echo strstr($combine, "come"); ?><br>
        Replace word with new: <?php echo str_replace("sit", "stand", $combine); ?><br>
    <?php
      // echo "my name is Sean Charoutanh <br>";
      // echo "my age is 21 years <br>";
      // $color = "blue";
      // $shirt = "polo";
      // $combo = $color. " " .$shirt;
      // echo $combo;
    ?>

    <?php
      //echo "$color <br>"; // double quote will display value
      //echo '$color <br>'; // single quote will display variable
      //echo "$color is my favorite color. <br>"; // blue is my favorite color.
      //echo "{$color}is my Fav <br>"; // interpolate with { }
    ?>
  </body>
</html>
