<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];

  class Person {
    private $name;
    private $email;

    public function setName($name) {
      $this->name = $name;
    }

    public function setEmail($email) {
      $this->email = $email;
    }

    public function getName() {
      return $this->name;
    }

    public function getEmail() {
      return $this->email;
    }
  }

  $person = new Person();
  $person->setName($name);
  $person->setEmail($email);

  echo "<h2>" . "Name: " . $person->getName() . "<br>" . "</h2>";
  echo "<h2>" . "Email: " . $person->getEmail() . "</h2>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Assignment Task</title>
</head>
<body>
<div class="container pt-3 card shadow mt-5 d-block">
<form class="p-3" action="" method="POST">
  <label class="form-label" for="name">Name:</label>
  <input class="form-items" type="text" id="name" name="name"><br><br>
  
  <label class="form-label" for="email">Email:</label>
  <input class="form-items" type="email" id="email" name="email"><br><br>

  <input type="submit" value="Submit">
</form> 
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html> 

