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
    what grade did you get: <input type="text" name="grade"> <br>
    <input type="submit">

  </form>


  <?php
  $grade = $_POST['grade'];
 

  function yourGrade($grade){
    switch($grade){
      case "A": 
        echo "congrats you got an $grade";
        break;
      case "B": 
        echo "you got a $grade";
        break;
      case "C": 
        echo "you are average you got a $grade";
        break;
      case "D": 
        echo "you can try harder you got a $grade";
        break;
      case "F": 
        echo "you failed you got an $grade";
        break;
      default:
      echo "not only are you bad at tests you're bad at typing";
    }
  }
  
  yourGrade($grade)

  ?>


</body>

</html>