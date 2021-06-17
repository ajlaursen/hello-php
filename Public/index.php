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
    First Number: <input type="number" name="num1"> <br>
    Operator: <input type="text" name="op"><br>
    Second Number: <input type="number" name="num2"> <br>
    <input type="submit">

  </form>


  <?php
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $op = $_POST['op'];


  function getCalc($num1, $num2, $op)
  {
    if ($op == "+") {
      echo $num1 + $num2;
    } elseif ($op == "-") {
      echo $num1 - $num2;
    }elseif ($op == "*") {
    echo $num1 * $num2;
    }elseif ($op == "/") {
    echo $num1 / $num2;
    }else{
    echo "invalid operater $op";
    }
  };
  getCalc($num1, $num2, $op);
  

  ?>


</body>

</html>