<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- <form action="index.php" method="post">
    what grade did you get: <input type="text" name="grade"> <br>
    <input type="submit">

  </form> -->


  <?php

  $names = array("jim", "bob", "george");
  
 for( $i = 0; $i < count($names); $i++){
  echo "$names[$i]<br>";
 };
 

  
  ?>


</body>

</html>