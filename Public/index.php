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
class Chef
{
    public function makeChicken()
    {
        echo "the chef makes chicken <br>";
    }

    public function makeSalad()
    {
        echo "the chef makes Salad <br>";
    }

    public function makeSpecialDish()
    {
        echo "the chef makes BBQ Ribs <br>";
    }
}

class ItalianChef extends Chef
{
    public function makePasta()
    {
        echo "the chef makes pasta <br>";
    }
    public function makeSpecialDish()
    {
        echo "the chef makes lasagna <br>";
    }
}

$chef = new Chef;
$chef->makeSpecialDish();

$chef2 = new ItalianChef;
$chef2->makeSpecialDish();
$chef2->makePasta()

?>

</body>

</html>