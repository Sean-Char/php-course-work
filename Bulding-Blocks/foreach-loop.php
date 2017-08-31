<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>For Each Loop</title>
  </head>
  <body>
    <?php
      $Number = array(8,60,168,995,45,25,5,100);
      foreach ($Number as $key => $value) {
        echo "Numbers: {$key} <br />";
      }
    ?><hr>
    <?php
      $foods = array("item_number" => 1050, "name" => "Pizza", "region" => "Italy", "entre" => "Pasta", "drink" => "Coke", "package_price" => "null");

      foreach ($foods as $key => $value) {
        $Data = ucwords(str_replace("_"," ",$key));
          if ($key == "package_price") { // check package_price
            if (is_numeric($value)) { // is_bool(), isset(), empty(), is_null(), is_int()
            } else {
                $value = "cannot be determined ";
            }
          }
         echo "{$Data} : {$value} <br />";
      }
    ?><hr>
  </body>
</html>
