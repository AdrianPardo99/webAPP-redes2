<?php
    $arreglo=array();
    $mac=trim($_POST["mac-ip-static"]);
    $ip=trim($_POST["ip-ip-static"]);
    $netmask=trim($_POST["netmask-ip-static"]);
    $router=trim($_POST["router-ip-static"]);
    $dns=trim($_POST["dns-ip-static"]);
    $host=trim($_POST["name-ip-static"]);
    $linea="host ${host} {\n\thardware ethernet ${mac};\n\tfixed-address ${ip};\n\toption routers ${router};\n\toption subnet-mask ${netmask};\n\toption domain-name-servers ${dns};\n}\n";
    $arreglo["resultado"]=1;
    $arreglo["mensaje"]="Petici&oacuten procesada correctamente se genero la siguiente linea:<br>${linea}";
    $arreglo["conf"]=$linea;
    $respAx = json_encode($arreglo);
    echo $respAx;
 ?>
