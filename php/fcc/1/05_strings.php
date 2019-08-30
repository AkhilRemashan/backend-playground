<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      $favCar = "Mercedes Benz!";
      echo $favCar;

      echo "<br>";

      // to lowercase
      echo strtolower($favCar);

      echo "<br>";

      // to uppercase
      echo strtoupper($favCar);

      echo "<br>";

      // str length
      echo strlen($favCar);

      echo "<br>";

      // string characters
      echo $favCar[2];

      echo "<br>";

      // modifting individual index
      $favCar[0] = "T";
      echo $favCar;

      echo "<br>";

      // string replace
      $favCar = "Mercedes Benz";
      echo str_replace("Mercedes", "Carl", $favCar);

      echo "<br>";

      // substring
      $university = "Tallin University";
      echo substr($university, 0, 6);



    ?>

  </body>
</html>
