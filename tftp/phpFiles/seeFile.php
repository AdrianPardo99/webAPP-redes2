<?php
    $arreglo=array();
    $file=trim($_POST["filename-see-tftp"]);
    $command="cat ../conf-Files/${file}";
    $cmd="sudo bash ../scripts/checkFileExist.sh ${file}";
    $out=shell_exec($cmd);
    if($out=="1"){
      $out=shell_exec($command);
      $arreglo["resultado"] = 1;
      $arreglo["mensaje"] = "Consulta del archivo ${varFile}";
      $arreglo["contain"]=$out;
    }else{
      $arreglo["resultado"] = 0;
      $arreglo["mensaje"] = "El archivo no existe por favor revise el nombre del archivo";
      $arreglo["contain"]="Empty or not file exists";
    }
    $respAx = json_encode($arreglo);
    echo $respAx;
 ?>
