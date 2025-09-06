<?php

// Creamos la variable conexión: localhost (porque trabajamos en local) | root | password | colegio2 (nombre de la bd)
$conexion = mysqli_connect("localhost","root","","colegio2") or die("Problema con la conexión");
// Creamos el query para insertar los datos de la tabla creada (tabla estudiantes) con sus datos correspondientes (name="" de los inputs de registros_estudiantes.php)
mysqli_query($conexion, "INSERT INTO profesores(codigo,nombre,identificacion,telefono,direccion,mail,curso) VALUES ('$_REQUEST[codigo]','$_REQUEST[nombre]','$_REQUEST[identificacion]','$_REQUEST[telefono]','$_REQUEST[direccion]','$_REQUEST[mail]','$_REQUEST[curso]')") or die("Problemas en la selección de INSERT INTO" . mysqli_error($conexion));// El último que en este caso es "curso" le quitamos las comillas simples

mysqli_close($conexion); // Cerramos la conexión 

header('Location: ../registro_profesores.php');

?>