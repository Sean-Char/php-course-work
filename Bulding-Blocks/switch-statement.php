<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Switch Statement</title>
  </head>
  <body>
    <?php
      $Weather = "Cloudy";
      switch ($Weather) {
        case 'Sunny':
          echo "Weather is quite pleasant outside. <br />";
          break;
        case 'Rainy':
          echo "Weather is raining outside. <br />";
          break;
        case 'Cloudy':
          echo "Weather is expected to rain outside. <br />";
          break;
        default:
          echo "Weather can not be determined. <br />";
      }
    ?><hr>
      <?php
        $Restricted_Area = 'Media';
        switch ($Restricted_Area) {
          case 'Guard':
            echo "Permission Granted";
            break;
          case 'Office boy':
          case 'Public':
          case 'Media':
            echo "Permission Denied";
            break;
          default:
            echo "Hell to the no!";
            break;
        }

      ?>



  </body>
</html>
