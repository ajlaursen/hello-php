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
class Book
{
    public $title;
    public $author;
    public $pages;

    public function __construct($title, $author, $pages)
    {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
    }

}

$book1 = new Book("harry potter", "jk rowling", "1200");

$book2 = new Book("Lord of the rings", "tolkien", "1450");

print_r($book1);

print_r($book2);

?>

</body>

</html>