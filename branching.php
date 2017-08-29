<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Branching Statements</title>
  </head>
  <body>
    <pre>
      <?php
        $Names = array("Sean", "Jimmy", "Jonson", "Peter", "Jimbo", "Lucky", "Mickey", "Randy", "Terry");
        for ($i=0; $i <= 7; $i += 1) {
          if ($Names[$i] == "Jimbo") {
            continue; // Will skip jimbo and continue
            //break; -> loop will stop at jimbo.
          }
          echo $Names[$i]. "<br />";
        }
      ?>
    </pre>

  </body>
</html>
