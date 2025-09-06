<?php


$conexion = mysqli_connect("localhost","root","","colegio2") or die("Problema con la conexión");

mysqli_query($conexion, "INSERT INTO pago_tarjetas(fecha,importe,tarjeta) VALUES ('$_REQUEST[fecha]','$_REQUEST[importe]',$_REQUEST[tarjeta])") or die("Problemas en la selección de INSERT INTO" . mysqli_error($conexion));// El último que en este caso es "curso" le quitamos las comillas simples

mysqli_close($conexion); // Cerramos la conexión 

header('Location: http://localhost/WEB/PROYECTO_COLEGIO2/factura.php'); // Redirige al usuario a la página registro_estudiantes.php

?>