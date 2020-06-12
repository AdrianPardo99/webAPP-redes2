<?php
    $arreglo = array();
    $varFile = trim($_POST["filename-del-tftp"]);

    $command="rm ../conf-Files/${varFile}";
    $cmd="sudo bash ../scripts/checkFileExist.sh ${varFile}";
    $out=shell_exec($cmd);
    if($out=="1"){
      $out=shell_exec($command);
      $arreglo["resultado"] = 1;
      $arreglo["mensaje"] = "Se elimino correctamente el archivo ${varFile}";
    }else{
      $arreglo["resultado"] = 0;
      $arreglo["mensaje"] = "El archivo no existe por favor revise el nombre del archivo";
    }
    $respAx = json_encode($arreglo);
    echo $respAx;
 ?>
