<?php
    $arreglo=array();
    $conf=trim($_POST["conf-file"]);
    $data="default-lease-time 600;\nmax-lease-time 7200;\nlog-facility local7;\n".$conf;
    $cmd="sudo bash ../scripts/createDHCP.sh \"${data}\"";
    $out=shell_exec($cmd);
    if(empty($out)){
      $cmd="sudo cp ../confFile/dhcpd.conf /etc/dhcp/dhcpd.conf";
      $out=shell_exec($cmd);
      if(empty($out)){
        $arreglo["resultado"] = 1;
        $arreglo["mensaje"] = "Petici&oacuten procesada correctamente<br>Por favor recarga el servidor para aplicar cambios";
      }else{
        $arreglo["resultado"] = 0;
        $arreglo["mensaje"] = "Petici&oacuten procesada correctamente<br>Pero el script tuvo algunos errores, contacte al administrador para obtener acceso";
      }
    }else{
      $arreglo["resultado"] = 0;
      $arreglo["mensaje"] = "Petici&oacuten procesada correctamente<br>Pero el script tuvo algunos errores, contacte al administrador para obtener acceso";
    }
    $respAx = json_encode($arreglo);
    echo $respAx;
 ?>
