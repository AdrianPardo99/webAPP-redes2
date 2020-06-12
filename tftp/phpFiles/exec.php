<?php
    $arreglo = array();
    $ip=trim($_POST["ip-tftp"]);
    $port=trim($_POST["port-tftp"]);
    $filename=trim($_POST["filename-tftp"]);
    $cmd="sudo bash ../scripts/excecute.sh ${ip} ${port} /var/lib/tftpboot/ ${filename}";
    $out=shell_exec($cmd);
    sleep(5);
    $cmd="sudo bash ../scripts/checkFileExist.sh ${filename}";
    $out=shell_exec($cmd);
    if($out=="1"){
      $arreglo["resultado"] = 1;
      $arreglo["mensaje"] = "Petici&oacuten procesada correctamente con c&oacutedigo de operaci&oacuten ${out}<br>El puede ser descargado dando click en el icono siguiente:<br><a href=\"conf-Files/${filename}\" download><i class=\"material-icons\">cloud_download</i></a>";
    }else{
      $arreglo["resultado"] = 0;
      $arreglo["mensaje"] = "Petici&oacuten procesada correctamente con c&oacutedigo de operaci&oacuten ${out}<br>Pero el script tuvo algunos errores, contacte al administrador para obtener acceso";
    }
    $respAx = json_encode($arreglo);
    echo $respAx;
 ?>
