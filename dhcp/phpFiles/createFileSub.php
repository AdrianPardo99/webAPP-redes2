<?php
    $arreglo=array();
    $idRed=trim($_POST["id-ip"]);
    $netmask=trim($_POST["netmask-ip"]);
    $router=trim($_POST["router-ip"]);
    $dns=trim($_POST["dns-ip"]);
    $initIP=trim($_POST["min-ip"]);
    $lastIP=trim($_POST["last-ip"]);
    $linea="subnet ${idRed} netmask ${netmask}{\n\trange ${initIP} ${lastIP};\n\toption routers ${router};\n\toption domain-name-servers ${dns};\n}\n";
    $arreglo["resultado"]=1;
    $arreglo["mensaje"]="Petici&oacuten procesada correctamente se genero la siguiente linea:<br>${linea}";
    $arreglo["conf"]=$linea;
    $respAx = json_encode($arreglo);
    echo $respAx;
 ?>
