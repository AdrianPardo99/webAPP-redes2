<?php
    $arreglo = array();
    $var=trim($_POST["service"]);
    if($var=="init_t"){
      $cmdOut=shell_exec("sudo systemctl start tftp-server");
      if(empty($cmdOut)){
          $arreglo["resultado"] = 0;
          $arreglo["mensaje"] = "Petici&oacuten procesada correctamente: $var";
      }else{
        $arreglo["resultado"] = 1;
        $arreglo["mensaje"] = "Error en petici&oacuten: $var";
      }
    }elseif ($var=="stop_t") {
      $cmdOut=shell_exec("sudo systemctl stop tftp-server.*");
      if(empty($cmdOut)){
          $arreglo["resultado"] = 0;
          $arreglo["mensaje"] = "Petici&oacuten procesada correctamente: $var";
      }else{
        $arreglo["resultado"] = 1;
        $arreglo["mensaje"] = "Error en petici&oacuten: $var";
      }
    }elseif ($var=="restart_t"){
      $cmdOut=shell_exec("sudo systemctl restart tftp-server");
      if(empty($cmdOut)){
          $arreglo["resultado"] = 0;
          $arreglo["mensaje"] = "Petici&oacuten procesada correctamente: $var";
      }else{
        $arreglo["resultado"] = 1;
        $arreglo["mensaje"] = "Error en petici&oacuten: $var";
      }
    }elseif ($var=="status_t"){
      $cmdOut=shell_exec("sudo systemctl status tftp-server | grep Active");
      $arreglo["resultado"] = 0;
      $arreglo["mensaje"] = "Status service<br>Log: $cmdOut";
    }else{
      $arreglo["resultado"] = 1;
      $arreglo["mensaje"] = "Error en petici&oacuten: $var";
    }

    $respAx = json_encode($arreglo);
    echo $respAx;
 ?>
