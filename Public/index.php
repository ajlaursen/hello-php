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

  $isMale = false;
  $isTall = true;

  if ($isMale && $isTall) {
    echo "its a dude and tall";
  } else if($isMale){
    echo "its a short dude";
  } else if($isTall){
    echo "its a tall chica";
  }else{
    echo "its a short chica";
  };



  ?>


</body>

</html>