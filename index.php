<?php include_once('includes/encuesta.php') ?>
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
    <?php
      $encuesta = new Encuesta();
      $showResults = false;
      if(isset($_POST['lenguaje'])){
        $encuesta->setOpcionSeleccionada($_POST['lenguaje']);
        $encuesta->vote();
        $showResults = true;
      }
     ?>
    <h2>¿Cuál es tu lenguaje de programación favorito?</h2>

    <?php
        if($showResults){
          $resultados = $encuesta->showResults();
          echo '<h2>'.$encuesta->getTotalVotes().' Votos totales</h2>';
          foreach ($resultados as $lenguaje) {
            $porcentaje = $encuesta->getPercentageVotes($lenguaje['votos']);
            include 'vistas/vista_resultados.php';
          }
          return $showResults = false;
        }
    ?>
    <input type="radio" name="lenguaje" id="" value="c">C<br>
    <input type="radio" name="lenguaje" id="" value="c++">C++<br>
    <input type="radio" name="lenguaje" id="" value="java">Java<br>
    <input type="radio" name="lenguaje" id="" value="php">PHP<br>
    <input type="radio" name="lenguaje" id="" value="python">Python<br>

    <input type="submit" value="Votar!">
  </form>
</body>
</html>
