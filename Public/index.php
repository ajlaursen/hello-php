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



  function getMax($num1, $num2, $num3)
  {
    if ($num1 > $num2 && $num1 > $num3) {
      echo "$num1 is bigger than $num2 and $num3<br>";
    } elseif ($num2 > $num1 && $num2 > $num3) {
      echo "$num2 is bigger than $num1 and $num3<br>";
    } else {
      echo "$num3 is bigger than $num2 and $num1<br>";
    }
  };

  getMax(20, 30, 15);
  getMax(40, 30, 14);
  getMax(500, 5000, 17)


  ?>


</body>

</html>