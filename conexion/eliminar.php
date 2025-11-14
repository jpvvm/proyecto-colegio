<?php

include 'conectar.php';

$registros = mysqli_query($conexion, "SELECT identificacion1 FROM gestion_caja WHERE nombre1='$_REQUEST[nombre1]'") or die ("Problemas con el select" . mysqli_error($conexion));

if($reg = mysqli_fetch_array($registros)){
    mysqli_query($conexion, "DELETE FROM gestion_caja WHERE nombre1='$_REQUEST[nombre1]'") or die ("Problemas con el select" . mysqli_error($conexion));
}else{
    echo "no existe el curso";
}

mysqli_close($conexion);

header('Location: https://localhost/WEB/PROYECTO_COLEGIO2/administracion.php')

?>