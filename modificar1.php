<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>











<?php

// OBJETIVO: Esto pretende dar el código del estudiante y traerlo específicamente a "Registro a modificar. Me va a dar la nota visible del estudiante para yo modificarla."

// 1º incluímos la conexión. Al hacer el include './conexion/conectar.php' estamos cogiendo ya todo el código escrito en "conectar.php", que únicamente hace la conexión

include 'conexion/conectar.php';

// Hacemos la petición  la BD.
// "*" esto en SQL es que me estoy trayendo todos los campos (todas las columnas) 
//Traducido: Seleccionamos todos los campos de la tabla notas buscando solo al estudiante cuyo codigo sea igual al valor que viene de $_REQUEST['codigo'].)

$registros = mysqli_query($conexion, "SELECT * FROM notas WHERE  codigo='$_REQUEST[codigo] '") or die ("Problemas en el select" . mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros)) {

?>




<!---- Hacemos un <form>. <form action="./modificar2.php"> Llamo a /modificar2.php -->
<form action="modificar2.php" method="post">
<!---- Hacemos un bs5-input. Poner name="notas". Tb le ponemos value="php..." para que evalúe lo que estamos colocando. Al final lo hacemos en HTML normal   -->

Ingrese nueva nota:
    <input type="text" name="notas" value="<?php echo $reg['notas'] ?>">
    <br>

<!---- Hacemos otro input. Poner name="notas". name="codigo" Este input va a estar "escondido" porque lo que interesa es que el programa coja el código que estamos trayendo, 
por eso ponemos "type="hidden". Tb le ponemos value="php... para que evalúe lo que estamos colocando -->

    <input type="hidden" name="codigo" value="<?php echo $reg['codigo'] ?>">

    <input type="submit" value="Modificar">

    </form>



<?php

}else
    echo "El codigo no existe";


?>


















        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
