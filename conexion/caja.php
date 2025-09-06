<?php


$conexion = mysqli_connect("localhost","root","","colegio2") or die("Problema con la conexión");

mysqli_query($conexion, "INSERT INTO gestion_caja(fecha1,nombre1,identificacion1,direccion1,curso1,cuota1,costo1,descripcion1) VALUES ('$_REQUEST[fecha1]','$_REQUEST[nombre1]','$_REQUEST[identificacion1]','$_REQUEST[direccion1]','$_REQUEST[curso1]','$_REQUEST[cuota1]','$_REQUEST[costo1]','$_REQUEST[descripcion1]')") or die("Problemas en la selección de INSERT INTO" . mysqli_error($conexion));

mysqli_close($conexion); // Cerramos la conexión 

header('Location: http://localhost/WEB/PROYECTO_COLEGIO2/factura.php'); // Redirige al usuario a la página factura.php

?>