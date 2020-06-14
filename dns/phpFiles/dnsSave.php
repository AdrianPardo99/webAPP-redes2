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
        $arreglo["resultado"] = 1;
        $arreglo["mensaje"] = "Petici&oacuten procesada correctamente";
        $arreglo["directa"] = "Zona directa:<a href=\"confFile/dnsRedes.local\" download><i class=\"material-icons\">cloud_download</i></a>";
        $arreglo["inversa"] = "Zona inversa:<a href=\"confFile/reverse.dnsRedes.local\" download><i class=\"material-icons\">cloud_download</i></a>";
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
