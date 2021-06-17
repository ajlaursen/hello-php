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

}

$book1 = new Book;
$book1->title = "harry potter";
$book1->author = "jk rowling";
$book1->pages = "1200";

$book2 = new Book;
$book2->title = "Lord of the Rings";
$book2->author = "tolkien";
$book2->pages = "1450";

print_r($book2);

?>

</body>

</html>