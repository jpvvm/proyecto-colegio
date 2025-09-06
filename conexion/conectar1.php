
<?php


$conexion = mysqli_connect("localhost","root","","colegio2") or die ("Problemas con la conexion");

// Tengo que crear la variable registro para hacer la petición. Porque la variable va a guardar los datos consultados
// SELECT para especificar qué campos extraigo de la bd (campos como mail, curso...)
// FROM, para decirle de qué tabla extraigo (en este caso la tabla "estudiantes")
// WHERE, buscando solo al estudiante cuyo codigo sea igual al valor que viene de $_REQUEST['codigo'].)

$registro = mysqli_query($conexion,"SELECT mail,nombre,curso,identificacion FROM estudiantes WHERE codigo='$_REQUEST[codigo]'") or die
("Problemas en el select" . mysqli_error($conexion));

// Creamos una variable que tome los registros ($reg). Esta variable almacena un array donde están todos los campos solicitados. mysqli_fetch_array(...) toma la primera fila del resultado como un array. Si existe, entra en el if.

if($reg = mysqli_fetch_array($registro)){

 switch($reg['curso']){
    case 1:
        echo  "<script>alert('📁Nombre:  $reg[nombre]  \\n📁Identificacion:  $reg[identificacion] \\n📁Correo:  $reg[mail]  \\n📁Curso: PHP' );window.location.href='http://localhost/todo/Proyecto_colegio2/consulta1.php';</script>"; 
        break;
    case 2:
        echo  "<script>alert('📁Nombre:  $reg[nombre]  \\n📁Identificacion:  $reg[identificacion] \\n📁Correo:  $reg[mail]  \\n📁Curso: ASP ' );window.location.href='http://localhost/todo/Proyecto_colegio2/consulta1.php';</script>";
        break;
    case 3:
        echo  "<script>alert('📁Nombre:  $reg[nombre]  \\n📁Identificacion:  $reg[identificacion] \\n📁Correo:  $reg[mail]  \\n📁Curso: JSP ' );window.location.href='http://localhost/todo/Proyecto_colegio2/consulta1.php';</script>";
        break;
    default:
        echo "No está inscrito en ningún curso";
 }

/*echo "<script>   alert('💻 nombre: $reg[nombre] \\n📖 curso: $reg[curso] \\n🆔 identificación: $reg[identificacion] \\n📧 mail: $reg[mail]');
window.location.href='../consulta1.php';         </script>";*/


}else{
    echo "No existe el estudiante. Revise código";
}

mysqli_close($conexion);








?>