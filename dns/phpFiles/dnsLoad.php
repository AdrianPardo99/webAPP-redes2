<?php
  $arreglo=array();
  $genConf=trim($_POST["conf-file"]);
  $dirConf=trim($_POST["direct-conf-file"]);
  $invConf=trim($_POST["inverse-conf-file"]);
  $cmd="sudo bash ../scripts/mainConf.sh \"${genConf}\"";
  $out=shell_exec($cmd);
  if(!empty($out)){
    $cmd="sudo bash ../scripts/host.sh \"${dirConf}\" \"${invConf}\"";
    $out=shell_exec($cmd);
    if(!empty($out)){
      $cmd="sudo cp ../confFile/dnsRedes.local /var/named/dnsRedes.local && sudo cp ../confFile/reverse.dnsRedes.local /var/named/reverse.dnsRedes.local";
      $out=shell_exec($cmd);
      if(empty($out)){
        $arreglo["resultado"] = 1;
        $arreglo["mensaje"] = "Petici&oacuten procesada correctamente, por favor reinicie el servicio para efectuar los cambios realizados";
      }else{
        $arreglo["resultado"] = 0;
        $arreglo["mensaje"] = "Petici&oacuten procesada correctamente<br>Pero la copia del archivo de configuración no fue procesado correctamente, por favor contacte al admin";
      }
    }else{
      $arreglo["resultado"] = 0;
      $arreglo["mensaje"] = "Petici&oacuten procesada correctamente<br>Pero el segundo script tuvo algunos errores, contacte al administrador para obtener acceso";
    }
  }else{
    $arreglo["resultado"] = 0;
    $arreglo["mensaje"] = "Petici&oacuten procesada correctamente<br>Pero el primer script tuvo algunos errores, contacte al administrador para obtener acceso";
  }
  $respAx = json_encode($arreglo);
  echo $respAx;
 ?>
