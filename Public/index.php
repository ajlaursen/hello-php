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
class Student
{
    public $name;
    public $major;
    public $gpa;

    public function __construct($name, $major, $gpa)
    {
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
    }
    public function hasHonors()
    {
        if ($this->gpa > 3.5) {
            return "true";
        } else {
            return "false";
        }
    }
}

$student1 = new Student("jim", "business", 2.8);
$student2 = new Student("pam", "art", 3.6);

echo $student1->hasHonors();
echo $student2->hasHonors();

?>

</body>

</html>