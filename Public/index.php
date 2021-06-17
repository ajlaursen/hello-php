<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>



  <?php



  function getMax($num1, $num2)
  {
    if ($num1 > $num2) {
      echo "$num1 is bigger than $num2<br>";
    } else {
      echo "$num1 is smaller than $num2<br>";
    }
  };

  getMax(20, 30);
  getMax(40, 30);
  getMax(500, 5000)


  ?>


</body>

</html>