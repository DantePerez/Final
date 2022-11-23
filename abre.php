<?php

$conexion = new mysqli("localhost", "id19866920_danteperez", "FRl!^<cvT24cvzRz", "id19866920_palaciosdias");
if($conexion){
    echo "La gestion fue exitosa!!";
    // header("location: comisiones.html");
}else{
    echo "Fallo la gestion";
}