        <!--OBJETIVO: Este código lo que pretende es modificar la nota con el código que le he especificado  -->



        <?php

        include 'conexion/conectar.php'; //La clave de este programa es "UPDATE". Así logra modificar (update). UPDATE notas = modifica la tabla notas

        mysqli_query($conexion, "UPDATE notas
                        SET notas='$_REQUEST[notas]'            -- Lo que quiero modificar (SET) y De donde lo voy a traer (WHERE)
                        WHERE codigo='$_REQUEST[codigo]'") or 
            die ("problemas en el select: " . mysqli_error($conexion));
                        echo "La nota fue modificada exitosamente";

        ?>





















