<?php
    $arreglo=array();
    $conf=trim($_POST["conf-file"]);
    $data="default-lease-time 600;\nmax-lease-time 7200;\nlog-facility local7;\n".$conf;
    $cmd="sudo bash ../scripts/createDHCP.sh \"${data}\"";
    $out=shell_exec($cmd);
    if(empty($out)){
      $arreglo["resultado"] = 1;
      $arreglo["mensaje"] = "Petici&oacuten procesada correctamente<br>El puede ser descargado dando click en el icono siguiente:<br><a href=\"confFile/dhcpd.conf\" download><i class=\"material-icons\">cloud_download</i></a>";
    }else{
      $arreglo["resultado"] = 0;
      $arreglo["mensaje"] = "Petici&oacuten procesada correctamente<br>Pero el script tuvo algunos errores, contacte al administrador para obtener acceso,$conf";
    }
    $respAx = json_encode($arreglo);
    echo $respAx;
 ?>
