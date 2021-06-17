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
class Movie
{
    public $title;
    private $rating;

    public function __construct($title, $rating)
    {
        $this->title = $title;
        $this->setRating($rating);

    }

    public function showRating()
    {
        echo $this->rating;
    }
    public function setRating($rating)
    {
        if ($rating == "R" || $rating == "PG-13" || $rating == "G" || $rating == "NR" || $rating == "PG") {
            $this->rating = $rating;
        } else {
            $this->rating = "NR";
        }
    }
}

$movie1 = new Movie("Avengers", "DOG");

$movie1->setRating("PG-13");
$movie1->showRating();

?>

</body>

</html>