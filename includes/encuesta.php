<?php
include_once('db.php');
class Encuesta extends DB{
  private $totalVotos;
  private $opcionSeleccionada;


  public function setOpcionSeleccionada($option){
    $this->opcionSeleccionada = $option;
  }

  public function getOpcionSeleccionada(){
    return $this->opcionSeleccionada;
  }

  public function vote(){
    $query = $this->connect()->prepare('UPDATE lenguajes set votos = votos + 1 where opcion = :opcion');
    $query->execute(['opcion' => $this->opcionSeleccionada]);
  }

  public function showResults(){
    return $this->connect()->query('select * from lenguajes');
  }

  public function getTotalVotes(){
    $query = $this->connect()->query('select sum(votos) as votos_totales from lenguajes');
    $this->totalVotos = $query->fetch(PDO::FETCH_OBJ)->votos_totales;
    return $this->totalVotos;
  }

  public function getPercentageVotes($votes){
    return round(($votes / $this->totalVotos) * 100, 0);
  }
}

?>
