<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form action="index.php" method="post">


    <input type="text" name="color" />
    <br>
    <input type="text" name="pluralNoun" />
    <br>
    <input type="text" name="celebrity" />
    <br>
    <input type="submit" />

  </form>
  <br>

  <?php

  $color = $_POST["color"];
  $noun = $_POST["pluralNoun"];
  $celeb = $_POST["celebrity"];

  echo "roses are $color <br>";
  echo  "$noun are blue <br>";
  echo  "i love $celeb <br>";


  ?>


</body>

</html>