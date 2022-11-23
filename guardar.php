<?php

    include("abre.php");
    $Nombre         = $_POST['Nombre'];
    $Apellidos      = $_POST['Apellidos'];
    $Tipo           = $_POST['Tipo'];
    $Img            = addslashes(file_get_contents($_FILES['Img']['tmp_name']));
    $Descripcion    = $_POST['Descripcion'];

    $consulta = "INSERT INTO comision(Nombre, Apellidos, Tipo, Img, Descripcion) VALUES
    ('$Nombre', '$Apellidos', '$Tipo', '$Img', '$Descripcion')";

    if($conexion->query($consulta) === TRUE){
       /* header("Location: comisiones.html"); */
    }else{
        echo "Error: " . $consulta . "<br>" . $conexion->error;
    }
    $conexion->close();
    ?>