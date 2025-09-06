<?php
$conexion=mysqli_connect("localhost","root","","colegio2") or die ("problema con la conexión");

mysqli_query($conexion,"INSERT INTO notas(nombre,codigo,notas) VALUES('$_REQUEST[nombre]','$_REQUEST[codigo]',$_REQUEST[notas])") or die ("problemas en el select" . mysqli_error($conexion));

mysqli_close($conexion);

//echo "<script> alert('Fue registrado exitosamente la nota')</script>"; // Con esto nos vuelve a dejar en la página y nos da ese mensaje

// header('Location: ../curso1.php');

// header('Location: https://localhost/WEB/PROYECTO_COLEGIO2/curso1.php');

echo  "<script>alert('📁 SE REGISTRÓ SU NOTA CON ÉXITO' );window.location.href='https://localhost/WEB/PROYECTO_COLEGIO2/curso1.php';</script>"; 




?>