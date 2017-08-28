<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Arrays</title>
  </head>
  <body>
    <?php // arrays starts at zero
     $name = array('Sean', 'Jenny', 'Evan', 'Milana');
     echo $name[2];
    ?><br>

    <?php $Food = array('Salad', 10, 15, array('Laos', 'French', 'Germany'), 'Chicken');
      echo $Food[3][0];
    ?><br>
    <?php $Food[56] = 'Mango'; ?><br>
    <?php $Food[300] = 'Apple'; ?><br>
    <pre>
      <?php echo print_r($Food); ?>
    </pre><br>
    <?php
    // Associative arrays. you can do concatination also with them
    $Color = array("A" => "blue", "B" => "red"); ?><br>
    <?php echo $Color["A"]; ?><br>
    <?php $Food = array("Italian" => "Thai", "Thai" => "Pad Thai"); ?>
    <?php echo $Food["Thai"]. " is for " . $Food["Italian"] ?>
    <pre><?php print_r($Food) ?></pre>

  </body>
</html>
