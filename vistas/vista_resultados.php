<div class="opcion">
  <?php
    $widthBar = $porcentaje * 5;
    $estilo = "barra";

    if($encuesta->getOpcionSeleccionada() == $lenguaje['opcion']){
      $estilo = "seleccionado";
    }

    echo $lenguaje['opcion'];

  ?>

  <div class="resultados <?php echo $estilo ?>" style="width: <?php echo $widthBar.'px'?>">
    <?php echo $porcentaje.'%'; ?>
  </div>
</div>
