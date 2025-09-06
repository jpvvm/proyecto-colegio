<!doctype html>
<html lang="en">
    <head>
        <title>Curso 1</title>
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
        <!---- Llamamops al script de JS--->
        <script src="JS/notas.js"></script>
    </head>

    <body>
        <header>
            <?php include 'log/header.php' ?>
        </header>
        <main>


        <!---- bs5-container--->

        <div
            class="container"
        >
            <div style="text-align: center;">
            <h2>DESARROLLO DE APLICACIONES CON TECNOLOGÍAS WEB</h2>

            
                <a href="curso2.php"><button type="button" class="btn btn-primary">(IFCD0203)</button></a>
                    <a href=""><button type="button" class="btn btn-primary">(IFCD0214)</button></a>
                    
            </div>
            <br>
            <br>

            <div
                class="table-responsive"
            >
                <table
                    class="table table-secondary"
                >
                    <thead>
                        <tr>
                            <th scope="col">Módulos certificado</th>
                            <th scope="col">Horas</th>
                            <th scope="col">Nota Parcial</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td scope="row">MF0491_3: Programación web en el entorno cliente</td>
                            <td>180</td>
                            <td id="demo1"></td>
                        </tr>
                        <tr class="">
                            <td scope="row">MF0492_3: Programación web en el entorno servidor </td>
                            <td>240</td>
                            <td id="demo2"></td>
                        </tr>
                        <tr class="">
                            <td scope="row">MF0493_3: Implantación de aplicaciones web en entorno internet, intranet y extranet</td>
                            <td>90</td>
                            <td id="demo3"></td>
                        </tr>
                        <tr class="">
                            <td>Nota Final: <h3 id="demo4"></h3></td> <!---- Importantísimo poner el id="demo4" y los similares--->
                            <td></td>
                            <td>            <button type="button" class="btn btn-success" style="float: right;" onclick="nota()">Calcular</button>                </td> <!---- Acordarse de poner el onclick para que salte la función de JS--->
                            
                        </tr>
                        


                    </tbody>
                    
                </table>
                
            </div>
            

            <div
                class="table-responsive"    
            >
                <table
                    class="table table-primary"
                >
                    <thead>
                        <tr>
                            <th scope="col">Nombre del Estudiante</th>
                            <th scope="col">Codigo</th>
                            <th scope="col">Nota</th>
                        </tr>
                    </thead>
                    <tbody>

                   
                        <tr class="">
                        

                        

                            <td scope="row">
                            <!---- form formulario de registro de notas-->
                            <form action="conexion/notas.php" method="post">

                                <!----- bs5-input-->
                                <div class="mb-3">
                                    
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nombre"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    
                                </div>
                                
                            </td>
                            <td>
                         
                            <div class="mb-3">
                                <label for="" class="form-label"></label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="codigo"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                                
                            </div>
                            </td>
                            <td>

                            
                                <!---- bs5-select-->


                                <div class="mb-3">
                                    <label for="" class="form-label"></label>
                                    <select
                                        class="form-select form-select-lg"
                                        name="notas"
                                        id=""
                                    >
                                        <option selected>Seleccione</option>
                                        <option value="1">Aprobado</option> <!---- Ponemos value=1 y value 2-->
                                        <option value="2">Suspenso</option>
                                        
                                    </select>


                                </div>
                                
                            </td>
                        </tr>
                        <tr class="">
                            <td scope="row">        <button type="reset" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
</svg> BORRAR</button>               </td>
                            <td>
                                
                            
                            <!-- HACEMOS UN BS5-MODAL-DEFAULT. Modal trigger button -->
                            <button
                                type="button"
                                class="btn btn-primary btn-lg"
                                data-bs-toggle="modal"
                                data-bs-target="#modalId"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-folder" viewBox="0 0 16 16">
  <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a2 2 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139q.323-.119.684-.12h5.396z"/>
</svg> Consultar Notas
                            </button>
                            
                            <!-- Modal Body -->
                            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard.
                             En vez de data-bs-backdrop="static". Hay que poner data-bs-backdrop="false" -->
                            <div
                                class="modal fade"
                                id="modalId"
                                tabindex="-1"
                                data-bs-backdrop="false"    
                                data-bs-keyboard="false"
                                
                                role="dialog"
                                aria-labelledby="modalTitleId"
                                aria-hidden="true"
                            >
                                <div
                                    class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg"
                                    role="document"
                                >
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitleId">
                                               AQUI PUEDES CONSULTAR LAS NOTAS
                                            </h5>
                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"
                                            ></button>
                                        </div>
                                        <div class="modal-body">                                 


                                        <!--- Abrimos php para llamar a la conexión--->
                                        
<?php

include 'conexion/conectar.php';

// query con SELECT (cojo las COLUMNAS codigo, nombre y notas) y FROM para traernos la TABLA de notas

$registros =mysqli_query($conexion , "SELECT codigo,nombre,notas FROM notas") or die ("Problemas en el select:" . mysqli_error($conexion));

// Hacemos un bucle while para que esté dando vueltas constantemente y así vaya tomando todos los archivos cada vez que abra la consulta.
while($reg =mysqli_fetch_array($registros)){

// Ahora viene la locura "echo" Hacemos un bs5-table-default que la meteremos debajo del while del "< ? php" que estamos haciendo. Modificando todo lo que no necesitemos
// En el ultimo <tr>
echo "

<div
    class='table-responsive'
>
    <table
        class='table table-primary'
    >

    <table>

    <tr>
                <th style='width: 800px'>Nombre</th>
                <th style='width: 800px'>Código</th>
                <th style='width: 800px'>Notas</th>
    </tr>
    
    <tr>
                <td>$reg[codigo]</td>
                <td>$reg[nombre]</td>";

                switch($reg['notas']){
                    case 1:
                        echo '<td>Aprobado</td>';
                    break;
                    case 2:
                        echo '<td>Suspenso</td>';
                    break;
                }
                

                echo "  
    </tr>

    
    </table>
    </div> ";




}
mysqli_close($conexion);

?>



                                        </div>
                                        <div class="modal-footer">
                                            <button
                                                type="button"
                                                class="btn btn-secondary"
                                                data-bs-dismiss="modal"
                                            >
                                                CERRAR
                                            </button>
        <button
            type="button"
            class="btn btn-primary btn-lg"
            data-bs-toggle="modal"
            data-bs-target="#modalId11" 
        >
            MODIFICAR
        </button>
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
                            </td>
                            <td>                    <button type="submit" class="btn btn-success" style="float: right;" onclick="registro()"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
  <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
</svg> Registrar Nota</button>                                       </form> <!---- Aqui cerramos el form del formulario-->               





                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
<!----- Función alert para que nos diga que está registrado. ACORDARSE DE PONER ONCLICK en el botón:  onclick="registro()"  --->
            <script>

            function registro(){
                alert("se registró correctamente")
            }


            </script>







        </div>
        

        <!---- Aqui vamos a crear otro modal: bs5-modal. El button del modal lo subí para arriba, solo cogimos el botón porque era lo que teníamos que llevar, 
        El resto lo dejamos saqui abajo de los comentarios-->

        <!-- ========== Start modal-modificar ========== -->

        <!-- Modal trigger button -->

        
        <!-- Modal Body -->
        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
        <div
            class="modal fade"
            id="modalId11"
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
                    <div class="modal-body">
                        
                    <!---- Hacemos un <form> y ponemos un bs5-input. <form action="./modificar1.php"> Llamo a /modificar1.php. Pongo name="codigo"
                        OBJETIVO: Este formulario lo que pretende es ubicar el código del estudiante que deseo modificar y por ello va a modificar1.php-->

                    <form action="modificar1.php" method="post">
                    Ingrese el codigo del alumno:
                    <input type="text" name="codigo"><br>
                    <input type="submit" value="buscar">
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
                        <button type="submit" class="btn btn-primary">Modificar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Optional: Place to the bottom of scripts -->
        <script>
            const myModal11 = new bootstrap.Modal(
                document.getElementById("modalId"),
                options,
            );
        </script>
        
        
        <!-- ========== End modal-modificar ========== -->


        






        </main>
        <footer style="margin-top: -500px;">
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
