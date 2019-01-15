<?php include_once('includes/db.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Encuesta</title>
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <form action="" method="post">
    <h2>¿Cuál es tu lenguaje de programación favorito?</h2>

    <input type="radio" name="lenguaje" id="" value="c">C<br>
    <input type="radio" name="lenguaje" id="" value="c++">C++<br>
    <input type="radio" name="lenguaje" id="" value="java">Java<br>
    <input type="radio" name="lenguaje" id="" value="php">PHP<br>
    <input type="radio" name="lenguaje" id="" value="python">Python<br>

    <input type="submit" value="Votar!">
  </form>

  <?php
      $db = new DB();
      $db->connect();
  ?>
</body>
</html>
