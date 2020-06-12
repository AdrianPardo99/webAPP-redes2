<!--s -> Mobile
      l -> Desk
      m -> Tablet-->
<?php
    include 'phpGral/init.php';
    $var="index";
    echo "<title>Directorio principal</title>";
    include 'phpGral/titulo.php';
 ?>

  <div class="row">
    <?php include 'phpGral/mainConf.php';?>
    <br>
    <br>
  </div>
  <div class="row">
    <div class="col l2"></div>
    <div class="col l8 m12 s12">
    <?php include 'phpGral/cartas.php';?>
    </div>
    <div class="col l2"></div>
  </div>
  <?php include 'phpGral/foot.php';
  /* Para ejecutar ssh via python es necesario hacerlo con sudo*/
  ?>
