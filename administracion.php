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
        <script src="JS/administracion.js"></script>
    </head>

    <body>
        <header>
            <?php include 'log/header.php' ?>
        </header>
        <main>

        <div
            class="container"
            style="margin-top: 20px; text-align:center"
        >

            <!-- ========== Start modal1 ========== -->
            <!-- Modal trigger button -->
            <button
                type="button"
                class="btn btn-primary btn-lg"
                data-bs-toggle="modal"
                data-bs-target="#modalId"
            >
                VENTAS
            </button>
            
            <!-- Modal Body -->
            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
            <div
                class="modal fade"
                id="modalId"
                tabindex="-1"
                data-bs-backdrop="static"
                data-bs-keyboard="false"
                
                role="dialog"
                aria-labelledby="modalTitleId"
                aria-hidden="true"
            >
                <div
                    class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl"
                    role="document"
                >
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">
                                Modal title
                            </h5>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            
                        <!-- ========== Start Dentro de este modal-body de VENTAS hacemos php ========== -->

                        <?php

                        // Incluimos la conexion

                        include 'conexion/conectar.php';

                        // Creamos un query de conexion y traernos todo lo que tenemos dentro de la tabla de la BD de colegio relativa al archivo de factura.php (que es gestion_caja, la tabla)

                        //  fecha1,nombre1,identificacion1,direccion1,curso1,cuota1,costo1,descripcion1 Tienen el "1" porque así lo hice en la BD de la tabla geston_caja

                        $registro2=mysqli_query($conexion, "SELECT fecha1,nombre1,identificacion1,direccion1,curso1,cuota1,costo1,descripcion1 FROM gestion_caja") or die ("Problemas en el select" . mysqli_error($conexion));

                        // Hacemos un bucle while para que vaya recogiendo los datos. Donde creamos una variable llamada "reg" que sea = al array de los datos de arriba (que están dentro de la variable $registro2)

                        while($reg = mysqli_fetch_array($registro2)){
                            
                        // Los datos que están en el siguiente "echo" se pueden poner en el orden que queramos

                        // Vamos a hacer un switch para el select de "Seleccione el curso" porque sino me daría resultados 1,2,3 en vez de PHP, PHYTON, JAVA

                        // Vamos a hacer html dentro de php gracias al echo

                        echo " 
                        
                        <div
                            class='table-responsive'
                        >

                        <table
                            class='table table-primary' 
                        >

                        <tr>
                            <th>fecha:</th>
                            <th>nombre:</th>
                            <th>identificacion:</th>
                            <th>direccion:</th>
                            <th>cuota:</th>
                            <th>costo:</th>
                            <th>descripcion:</th>
                            <th>curso:</th>
                        </tr>

                        <tr>

                        
                        
                        <td>$reg[fecha1]</td>
                        <td>$reg[nombre1]</td>
                        <td>$reg[identificacion1]</td>
                        <td>$reg[direccion1]</td>
                        <td>$reg[cuota1]</td>
                        <td>$reg[costo1]</td>
                        <td>$reg[descripcion1]</td>        
                                       

                        ";

                        // Como curso tiene el detalle del select. Lo sacamos fuera del "echo"

                        switch($reg['curso1'] ){

                            case 1:
                                echo '<td>PHP</td>';
                            break;

                            case 2:
                                echo '<td>Phyton</td>';
                            break;

                            case 3:
                                echo '<td>Javascript</td>';
                            break;

                            default: 
                                echo 'no pusiste el curso';

                        }

                        echo "
                        
                        </tr>
                        </table>
                        </div>
                        
                        ";

                        echo "TOTAL PAGADO: " . $reg['costo1'] * $reg['cuota1'];

                        }

                        ?>

                        
                        <?php

                        // Voy a ver los movimientos dentro de la caja y que me los sume todos los movimientos ("*")

                        $movimientos = mysqli_query($conexion, "SELECT count(*) as descripcion1 from gestion_caja") or die ("problema en el select: " . mysqli_error($conexion));
                        $reg = mysqli_fetch_array($movimientos);

                        echo "<h5 style= 'float:right; margin-top:20px; color:blue'> Nº de Ingresos Totales: $reg[descripcion1]     </h5>";

                        mysqli_close($conexion);

                        ?>
                        
                        <!-- ========== End Dentro de este modal-body de VENTAS hacemos php ========== -->


                        
                        <form action="conexion/eliminar.php" method="post">

                        <!-- ========== Start bs5-input Eliminar Pago ========== -->

                        <div class="mb-3" style="float: left;">
                            <label for="" class="form-label">Eliminar Pago (introduce nombre)</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nombre1"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                                style="width: 300px;"
                            />
                            
                        </div>
                        
                        
                        <!-- ========== End bs5-input  ========== -->

                        <button type="submit" class="btn btn-danger" onclick="eliminar()">Eliminar</button>

                        <!-- ========== Start script para el onclick del botón ========== -->

                        <script>

                        function eliminar(){
                            alert("ingreso eliminar");
                        }

                        </script>
                        
                        <!-- ========== End script para el onclick del botón ========== -->


                        


                        


                        </form>




                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal"
                            >
                                Close
                            </button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Optional: Place to the bottom of scripts -->
            <script>
                const myModal = new bootstrap.Modal(
                    document.getElementById("modalId"),
                    options,
                );
            </script>

            <!-- ========== End modal1 ========== -->









            <!-- ========== Start modal2 ========== -->

            <!-- Modal trigger button -->
            <button
                type="button"
                class="btn btn-primary btn-lg"
                data-bs-toggle="modal"
                data-bs-target="#modalId2"
            >
                REGISTRO
            </button>
            
            <!-- Modal Body -->
            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
            <div
                class="modal fade"
                id="modalId2"
                tabindex="-1"
                data-bs-backdrop="static"
                data-bs-keyboard="false"
                
                role="dialog"
                aria-labelledby="modalTitleId"
                aria-hidden="true"
            >
                <div
                    class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                    role="document"
                >
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">
                                Modal title
                            </h5>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">Body</div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal"
                            >
                                Close
                            </button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Optional: Place to the bottom of scripts -->
            <script>
                const myModal2 = new bootstrap.Modal(
                    document.getElementById("modalId"),
                    options,
                );
            </script>
            
            
            <!-- ========== End modal2 ========== -->

            <h3 style="text-align: center;">Libro diario</h3>

            <!-- ========== Start bsd5-container para crear la tabla ========== -->

            <div
                class="container"
                style="margin-top: 25px;"
            >
            <div
                class="table-responsive"
            >
                <table
                    class="table table-light"
                >
                    <thead>
                        <tr class="table-danger">
                            <th scope="col">Fecha</th>
                            <th scope="col">Cuenta</th>
                            <th scope="col">Debe</th>
                            <th scope="col">Haber</th>
                            <th scope="col">Registros</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td scope="row" id="demo20"></td> 
                            <td id="demo21"></td>
                            <td id="demo22"></td>
                            <td id="demo23"></td>
                            <td><button type="button" class="btn btn-danger" onclick="fila1()">Registrar</button></td>
                        </tr>
                        <tr class="">
                            <td scope="row" id="demo24"></td>
                            <td id="demo25"></td>
                            <td id="demo26"></td>
                            <td id="demo27"></td>
                            <td><button type="button" class="btn btn-danger" onclick="fila2()">Registrar</button></td>
                        </tr>
                        <tr class="">
                            <td scope="row" id="demo28"></td>
                            <td id="demo29"></td>
                            <td id="demo30"></td>
                            <td id="demo31"></td>
                            <td><button type="button" class="btn btn-danger" onclick="fila3()">Registrar</button></td>
                        </tr>
                        <tr class="">
                            <td scope="row" id="demo32"></td>
                            <td id="demo33"></td>
                            <td id="demo34"></td>
                            <td id="demo35"></td>
                            <td><button type="button" class="btn btn-danger" onclick="fila4()">Registrar</button></td>
                        </tr>
                        <tr class="">
                            <td scope="row" id="demo36"></td>
                            <td id="demo37"></td>
                            <td id="demo38"></td>
                            <td id="demo39"></td>
                            <td><button type="button" class="btn btn-danger" onclick="fila5()">Registrar</button></td>
                        </tr>                        
                        <tr class="">
                            <td scope="row" id="demo40"></td>
                            <td id="demo41"></td>
                            <td id="demo42"></td>
                            <td id="demo43"></td>
                            <td><button type="button" class="btn btn-danger" onclick="fila6()">Registrar</button></td>
                        </tr>
                        <tr class="">
                            <td scope="row" id="demo44"></td>
                            <td id="demo45"></td>
                            <td id="demo46"></td>
                            <td id="demo47"></td>
                            <td><button type="button" class="btn btn-danger" onclick="fila7()">Registrar</button></td>
                        </tr>                                                
                    </tbody>
                </table>
            </div>

            <!-- <button type="button" class="btn btn-danger" onclick="libro_diario()">Registrar</button> -->
            
            </div>
                
            
            <!-- ========== End bsd5-container para crear la tabla ========== -->

            
            
            
            
        </div>
        












        </main>
        <footer>
            <?php include 'log/footer.php' ?>
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
