<!doctype html>
<html lang="en">
    <head>
        <title>Factura</title>
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

    <body style="background-color: grey;">
        <header>
            <?php include 'log/header.php' ?>
        </header>
        <main>


        

        <!-- ========== Start bs5-container========== -->
        
            <div
                class="container"
                style="margin-left: 200px;"
            >
                <img src="img/logo-colegio.png" alt="" style="width: 5%;" />

            </div>

        <!-- ========== End bs5-card-border de tipo warning ========== -->

        <!-- ========== Start bs5-row-grid ========== -->
        

        
        <div
            class="row justify-content-center align-items-center g-2"
            style="margin-left: 200px;"
            
        >
            <div class="col">

            <form action="conexion/caja.php">

        <!-- ========== Start bs5-input ========== -->

                <div class="mb-3">
                    <label for="" class="form-label">Fecha</label>
                    <input
                        type="date"
                        class="form-control"
                        name="fecha1"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                        style="width: 200px;"
                    />
                    
                </div>

        <!-- ========== End bs5-input ========== -->
                
            </div>

        </div>
        
        <!-- ========== End bs5-row-grid ========== -->
        

        <!-- ========== Start bs5-row ========== -->    

        <div
            class="row justify-content-center align-items-center g-2"
            style="margin-left: 200px;"
        >
            <div class="col">
        <!-- ========== Start bs5-bard-border y de tipo light ========== -->
                <div
                    class="card border-light"
                >
                    <img class="card-img-top" src="holder.js/100px180/" alt="DATOS DE LA OPERACIÓN" />
                    <div class="card-body">
                        <h4 class="card-title">Datos de la factura</h4>

        <!-- ========== Start bs5-input NOMBRE========== -->

        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input
                type="text"
                class="form-control"
                name="nombre1"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            
        </div>

        <!-- ========== End bs5-input NOMBRE========== -->

        <!-- ========== Start bs5-input IDENTIFICACION========== -->

        <div class="mb-3">
            <label for="" class="form-label">Identificacion</label>
            <input
                type="text"
                class="form-control"
                name="identificacion1"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            
        </div>
        
        <!-- ========== End bs5-input IDENTIFICACION========== -->

        <!-- ========== End bs5-input DIRECCION========== -->

        <div class="mb-3">
            <label for="" class="form-label">Direccion</label>
            <input
                type="text"
                class="form-control"
                name="direccion1"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            
        </div>
        

        <!-- ========== End bs5-input DIRECCION========== -->
                        
                    </div>
                </div>
        <!-- ========== End bs5-card-border y de tipo light ========== -->        
            </div>
            <div class="col">
                

        <!-- ========== Start bs5-border tipo light ========== -->

        <div
            class="card border-light"
        >
            <img class="card-img-top" src="holder.js/100px180/" alt="DATOS DE LA OPERACIÓN" />
            <div class="card-body">
                <h4 class="card-title">Cuota a calcular:</h4>
        
        <!-- ========== Start bs5-select CURSO ========== -->

        <div class="mb-3">
            <label for="" class="form-label">Curso</label>
            <select
                class="form-select form-select-lg"
                name="curso1"
                id=""
            >
                <option selected>Seleccione el curso</option>
                <option value="">PHP</option>
                <option value="">PYTHON</option>
                <option value="">JAVA</option>
            </select>
        </div>
        
        

        <!-- ========== End bs5-select CURSO========== -->

        <!-- ========== Start bs5-input CUOTA. PONER EN type = "number"========== -->

        <div class="mb-3">
            <label for="" class="form-label">Cuota</label>
            <input
                type="number"
                class="form-control"
                name="cuota1"
                id="num1"
                aria-describedby="helpId"
                placeholder=""
            />
            
        </div>
        

        <!-- ========== End bs5-input CUOTA========== -->

        <!-- ========== Start bs5-input COSTO.========== -->

        <div class="mb-3">
            <label for="" class="form-label">Costo</label>
            <input
                type="text"
                class="form-control"
                name="costo1"
                id="num2"
                aria-describedby="helpId"
                placeholder=""
            />
            
        </div>

        <!-- ========== End bs5-input COSTO. ========== -->

        <h2>Total: <span id="demo2"></span></h2>  <!--- Hacemos un h2 con un id=""-->


        <!-- ========== Start script para multiplicar 2 números (Cuota y Costo). Poner en id el "num1" en Cuota y "num2" en Costo ========== -->
              
        
        <script>
        
        function clic(){
        
        var num1 = document.getElementById("num1").value;
        var num2 = document.getElementById("num2").value;

        var resultado =num1*num2;

        document.getElementById('demo2').innerHTML=resultado;



        }
        </script>    

        <!-- ========== End script para multiplicar 2 números (Cuota y Costo). Poner en id el "num1" en Cuota y "num2" en Costo========== -->
        
        
        

        <!-- ========== Start textarea ========== -->

        <div class="mb-3">
            <label for="" class="form-label">Descripción:</label>
            <textarea class="form-control" name="descripcion1" id="" rows="3"></textarea>
        </div>

        <!-- ========== Start botón CALCULAR. Ponerle onclick. Tipo button. En este botón ponemos el onclick de la función clic de js ========== -->

        <button type="button" onclick="clic()" class="btn btn-primary">Calcular</button>

        <!-- ========== End botón CALCULAR. Ponerle onclick. Tipo button ========== -->

        <!-- ========== Start botón GUARDAR. Ponerle onclick. Tipo submit. Este botón no tiene onclick porque va para la BD ========== -->

        <button type="submit" class="btn btn-primary" onclick="confirmar()">Guardar</button>

        <!-- ========== End botón GUARDAR. Ponerle onclick. Tipo submit ========== -->    

        </form>
        
            </div>
        </div>
        
        <script>
        function confirmar(){
            if(window.confirm("¿Desea guardar la operación?")){

            if(window.confirm("Va a cerrar la operación. ¿Estás seguro?")){
                alert("fue guardado con exito");
            }
            }else{
                event.preventDefault();
                alert("no se guardó la operación");
            }
        }


        </script>
        
        


            </div>
            <div class="col">

        <!-- ========== Start bs5-border ========== -->   

        <div
            class="card border-primary"
        >
            <img class="card-img-top" src="holder.js/100px180/" alt="FORMAS DE PAGO" />
            <div class="card-body">
                <h4 class="card-title">Forma de Pago</h4>
                <p class="card-text">Text</p>

        <!-- ========== Vamos a Bootstrap y cogemos el código de Acordeón  ========== -->

        <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Tarjeta
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        
        <!-- ========== Start bs5-modal-default ========== -->

        <!-- Modal trigger button -->
        <button
            type="button"
            class="btn btn-primary btn-lg"
            data-bs-toggle="modal"
            data-bs-target="#modalId"
            style="margin-left: 300px;"
        >
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
  <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
</svg> PAGAR
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
                    <div class="modal-header" style="background-color: red;"> <!--- Hacemos un style background color red.-->
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
                    <div class="modal-body" style="background-color: rgb(237, 236, 236)">

                    <!-- ========== Start bs5-grid-row y quitamos 1 columna ========== -->

                    <div
                        class="row justify-content-center align-items-center g-2"
                    >
                        <div class="col">
                            

                    <!-- ========== Start Vamos a Bootstrap - Cards - List Groups y copiamos y pegamos el código ========== -->

                    <div class="card" style="width: 24rem; margin-top:-100px">
                        <h2 style="text-align: center;">OPERACIÓN BANCARIA</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> 
                    
                         
                            
                        
                        
                        
                        
                        <div id="areaImprimir">
                            <!--- En esta 1ª linea de la lista le añadimos un <div> con estilos-->
                        <div style="border: 2px solid black; height: 150px; border-radius: 5px; text-align:center">
                           

                        <p id="demo" style="text-align: center;"></p>
                         <!--- IMPORTANTE id="demo" para llamar al script-->

                        </div>

                        </div>
                        </li>
                        <li class="list-group-item">

                    <!--- En esta 2ª linea agregamos un botón-->

                    <button type="button" class="btn btn-primary" onclick="pago()">Calcular</button> <!--- IMPORTANTE onclick="pago()" para llamar al script-->
                        <button type="button" class="btn btn-secondary" style="float: right;" onclick="printDiv('areaImprimir')">Imprimir ticket</button> <!--- IMPORTANTE onclick="pago()" para llamar al script-->

                    <!-- ========== Start Script que copiamos del Aula Virtual ========== -->
                    
                    
                        
                    <script>


                    function printDiv(nombreDiv) {
                    var contenido= document.getElementById(nombreDiv).innerHTML;
                    var contenidoOriginal= document.body.innerHTML;
                    document.body.innerHTML = contenido;
                    window.print();
                    document.body.innerHTML = contenidoOriginal;
                    }

                    </script>

                    <!-- ========== End Script que copiamos del Aula Virtual ========== -->


                        </li>
                        
                    </ul>
                    </div>
                    
                    <!-- ========== End Vamos a Bootstrap - Cards - List Groups y copiamos y pegamos el código ========== -->


                    
                        </div>
                        <div class="col">

                    <!-- ========== Start script JavaScript ========== -->

                    <script>

                    function pago(){    // Esto luego se pone en el botón con un onclick (ver más arriba)
                    
                    const PhP = 350;
                    const JSP = 550;
                    const ASP = 800;
                    
                    let cantidad;
                    let curso;

                    cantidad=prompt("Cantidad a cobrar");
                    curso=prompt("Curso a pagar: (php, jsp, asp");

                    switch(curso){
                        case "php":
                            document.getElementById('demo').innerHTML = cantidad*PhP;    // Lo de "demo" luego se le pone al id= (ver arriba)
                            break;
                        case "jsp":
                            document.getElementById('demo').innerHTML = cantidad*JSP;    // Lo de "demo" luego se le pone al id= (ver arriba)
                            break;
                        case "asp":
                            document.getElementById('demo').innerHTML = cantidad*ASP;    // Lo de "demo" luego se le pone al id= (ver arriba)
                            break;
                        default: "No existe el curso. Por favor, corrija\nEscriba en minúscula"
                    }
                    }


                    </script>
                    
                    <!-- ========== End script JavaScript ========== -->


                    
                            

                    <!-- ========== Start bs5-border (de tipo light) ========== -->

                    <div
                        class="card border-light"
                    >
                        
                        <h4 class="card-title">Pagar con tarjeta</h4>

                        <div class="card-body">

                    <!-- ========== End bs5-border (de tipo light) ========== -->

                    <!-- ========== Start Hago 2 bs5 para poner el 💳 Fecha y 💶 Importe. Le pongo en name="" los campos de la BD "pago_tarjetas" ========== -->

                    <form action="conexion/tarjeta.php">

                    <div class="mb-3">
                        
                        <input
                            type="date"
                            class="form-control"
                            name="fecha"       
                            id=""
                            aria-describedby="helpId"
                            placeholder="💳 Fecha"
                            style="width:310px; margin-left:100px"
                        />
                        
                    </div>

                    <div class="mb-3">
                        
                        <input
                            type="text"
                            class="form-control"
                            name="importe"
                            id=""
                            aria-describedby="helpId"
                            placeholder="💶 Importe"
                            style="width:310px; margin-left:100px"
                        />
                        
                    </div>
                    
                    
                    <!-- ========== End Hago 2 bs5 para poner el Importe y fecha ========== -->

                    
                    
                    
                            
                            
                    <!-- ========== Start bs5-input 💳 Numero de tarjeta========== -->
                    
                    <div class="mb-3">
                        
                        <input
                            type="text"
                            class="form-control"
                            name="tarjeta"
                            id=""
                            aria-describedby="helpId"
                            placeholder="💳 Numero de tarjeta"
                            style="width:310px; margin-left:100px"
                        />
                        
                    </div>
                    
                    
                    <!-- ========== End bs5-input 💳 Numero de tarjeta========== -->
                    

                    <!-- ========== Start bs5-row ========== -->

                    <div
                        class="row justify-content-center align-items-center g-2"
                    >
                        <div class="col">

                    <!-- ========== Start bs5-row. 📅 Caducidad ========== -->   


                        <div class="mb-3">
                            
                            <input
                                type="text"
                                class="form-control"
                                name=""
                                id=""
                                aria-describedby="helpId"
                                placeholder="📅 Caducidad"
                                style="width: 150px; margin-left: 100px;"
                            />
                            
                        </div>
                    <!-- ========== End bs5-row 📅 Caducidad========== -->  

                        </div>
                        <div class="col">
                            

                    <!-- ========== Start bs5-row 💳 CVV ========== -->
                     
                    <div class="mb-3">
                        
                        <input
                            type="text"
                            class="form-control"
                            name=""
                            id=""
                            aria-describedby="helpId"
                            placeholder="💳 CVV"
                            style="width: 150px;"
                        />
                        
                    </div>
                    


                    <!-- ========== End bs5-row 💳 CVV========== --> 
                        </div>
                        
                    </div>
                    
                    
                    <!-- ========== End bs5-row ========== -->


                    <!-- ========== Start bs5-checkbox ========== -->

                    <div  style="text-align: center; border: 2px solid black; width:300px;margin-left:100px"> <!--- Hacemos un <div> padre para ponerle el estilo-->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="" />
                        <label class="form-check-label" for=""> Recordar esta tarjeta como método de pago en este dispositivo/navegador. </label>
                    </div>
                    </div>
                    
                    <br>

                    <!-- ========== End bs5-checkbox ========== -->

                    <div  style="text-align: center; border: 2px solid grey; width:300px;margin-left:100px; background-color: gainsboro"> <!--- Hacemos un <div> padre para ponerle el estilo-->
                                           
                         <p style="text-align: center;"> <b> Divide el pago con plazox! </b> </p> <br>
                        <p> Este comercio ofrece la posibilidad de fraccionar el pago de tu compra sin papeleos y al instante con tu entidad bancaria y plazox</p>
                    
                    </div>
                    
                    <br>

                    <!-- ========== Start Aqui ponemos los botones de "Cancelar" y "Pagar". Cogemos los botones de Bootstrap - Components - Buttons - "Outline Buttons" ========== -->

                    <!--- ANTES HACEMOS UN BS5-ROW-->

                    <div
                        class="row justify-content-center align-items-center g-2"
                        style="margin-left:95px"
                    >
                        <div class="col">
                    
                        <button type="button" class="btn btn-outline-danger">Cancelar</button>

                        </div>
                        <div class="col"
                        style="margin-left: 50px;">
                            
                        <button type="submit" class="btn btn-outline-success" onclick="pago()">Pagar</button>


                        </form>

                        <script>

                        function pago(){
                            alert("el pago se realizó correctamente");
                        }



                        </script>
                        </div>

                        
                        
                    </div>
                    


                    <!-- ========== End Aqui ponemos los botones de "Cancelar" y "Pagar". Cogemos los botones de Bootstrap - Components - Buttons - "Outline Buttons" ========== -->

                    
                    





                        </div>
                    </div>
                    
                    


                   
                    
                        </div>
                        
                    </div>
                    
                    
                    <!-- ========== End bs5-grid-row y quitamos 1 columna ========== -->

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
        
        
        <!-- ========== End bs5-modal-default ========== -->
      </div>
    </div>
  </div>
        
        <!-- ========== Start efectivo ========== -->

    <div class="accordion-item" >
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Efectivo
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">

        
    <!-- ========== Start bs5-grid-row ========== -->     
    
    
    <div
        class="row justify-content-center align-items-center g-2"
        style="margin-left: 350px; margin-top:15px"
    >
        <div class="col">
            
    <!-- ========== Start bs5-modal2 ========== -->  
     
        <!-- Modal trigger button -->
    <button
        type="button"
        class="btn btn-primary btn-lg"
        data-bs-toggle="modal"
        data-bs-target="#modalId2"
        
    >
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
  <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
</svg> PAGAR
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
                <div class="modal-body" style="background-color: grey;">
                    

                <!-- ========== Start bs5-row y hacemos 2 columnas CON INPUTS ========== -->

                <div
                    class="row justify-content-center align-items-center g-2"
                >
                    <div class="col">
                        
                    <h2>REGISTRO DE EFECTIVO</h2>

                    <div class="mb-3">
                        <label for="" class="form-label">Fecha:</label>
                        <input
                            type="date"
                            class="form-control"
                            name=""
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>

                    <!--------------------3 INPUTS---------------------->

                    <div class="mb-3">
                        <label for="" class="form-label">Billetes de 50€:</label>
                        <input
                            type="text"
                            class="form-control"
                            name=""
                            id="numero1"
                            aria-describedby="helpId"
                            placeholder="50€"          
                        />
                        
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Introduzca cantidad billetes de 50€</label>
                        
                        <input
                            type="text"
                            class="form-control"
                            name=""
                            id="numero2"
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Billetes de 20€:</label>
                        
                        <input
                            type="text"
                            class="form-control"
                            name=""
                            id="numero3"
                            aria-describedby="helpId"
                            placeholder="20€"          
                        />
                        
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Introduzca cantidad billetes de 20€</label>
                        
                        <input
                            type="text"
                            class="form-control"
                            name=""
                            id="numero4"
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Billetes de 10€:</label>
                        
                        <input
                            type="text"
                            class="form-control"
                            name=""
                            id="numero5"
                            aria-describedby="helpId"
                            placeholder="10€"          
                        />
                        
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Introduzca cantidad billetes de 10€</label>
                        
                        <input
                            type="text"
                            class="form-control"
                            name=""
                            id="numero6"
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Billetes de 5€:</label>
                        
                        <input
                            type="text"
                            class="form-control"
                            name=""
                            id="numero7"
                            aria-describedby="helpId"
                            placeholder="5€"          
                        />
                        
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Introduzca cantidad billetes de 5€</label>
                        
                        <input
                            type="text"
                            class="form-control"
                            name=""
                            id="numero8"
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>                    

                    <div class="mb-3">
                        <label for="" class="form-label"><b>RESULTADO TOTAL: </b></label>
                        
                        <input
                            type="text"
                            class="form-control"
                            name=""
                            id="resultado"
                            aria-describedby="helpId"
                            readonly placeholder=""
                        />
                        
                    </div>


                    <!-- ========== Start SCRIPT ========== -->

                    <script>
                    
                    const inputNumero1=document.getElementById('numero1');
                    const inputNumero2=document.getElementById('numero2');
                    const inputNumero3=document.getElementById('numero3');
                    const inputNumero4=document.getElementById('numero4');
                    const inputNumero5=document.getElementById('numero5');
                    const inputNumero6=document.getElementById('numero6');
                    const inputNumero7=document.getElementById('numero7');
                    const inputNumero8=document.getElementById('numero8');
                    const inputResultado=document.getElementById('resultado');

                    inputNumero1.addEventListener('input',calcularSuma);   // Esto es un método que permite escuchar y responder a eventos de un objeto. 
                    inputNumero2.addEventListener('input',calcularSuma);   // Esto es un método que permite escuchar y responder a eventos de un objeto. 
                    inputNumero3.addEventListener('input',calcularSuma);   // Esto es un método que permite escuchar y responder a eventos de un objeto. 
                    inputNumero4.addEventListener('input',calcularSuma);   // Esto es un método que permite escuchar y responder a eventos de un objeto. 
                    inputNumero5.addEventListener('input',calcularSuma);   // Esto es un método que permite escuchar y responder a eventos de un objeto. 
                    inputNumero6.addEventListener('input',calcularSuma);   // Esto es un método que permite escuchar y responder a eventos de un objeto. 
                    inputNumero7.addEventListener('input',calcularSuma);   // Esto es un método que permite escuchar y responder a eventos de un objeto. 
                    inputNumero8.addEventListener('input',calcularSuma);   // Esto es un método que permite escuchar y responder a eventos de un objeto. 
                    // Con la siguiente función sumamos 2 inputs:
                    function calcularSuma(){
                        const valor1=50;
                        const valor2= parseFloat(inputNumero2.value) || 0;  
                        const valor3=20;
                        const valor4= parseFloat(inputNumero4.value) || 0;
                        const valor5=10;
                        const valor6= parseFloat(inputNumero6.value) || 0;                                                
                        const valor7=5;
                        const valor8= parseFloat(inputNumero8.value) || 0;
                        suma=(valor1*valor2)+(valor3*valor4)+(valor5*valor6)+(valor7*valor8);
                        inputResultado.value=suma;

                    }

                    </script>
                    
                    <!-- ========== End SCRIPT ========== -->

                    
                    




                    </div>
                    <div class="col">
                        

                    <div
                        class="card border-danger"
                    >
                        <img class="card-img-top" src="img/logo-colegio.png" alt="" style="width:20%" />
                        <div class="card-body">
                            <h4 class="card-title"><b>RECIBO</b></h4>

                            <p class="card-text" >Recibí de <span id="demo20"></span></p>
                            <p class="card-text" >la cantidad de: <span id="demo21"></span></p>
                            <p class="card-text" >Por concepto de: <span id="demo22"></span></p>

                            <span id="demo23"></span> <p> del       <span id="demo24"> </span> de       <span id="demo25"> </span> de       <span id="demo26"> </span> </p>

                            <p>Recibe conforme: <span id="demo27"></span></p>           <p style="float: right;">Entrega conforme: Colegio </p>
                        </div>
                    </div>
                    

                    
                    
                    <script>

                    function recibo(){
                    let nombre;
                    let cantidad;
                    let concepto;
                    let sitio;
                    let dia;
                    let mes;
                    let año;
                    let reciba;
                    let entrega;

                    nombre=prompt("Nombre del cliente");
                    cantidad=prompt("cantidad");
                    concepto=prompt("concepto del recibo");
                    sitio=prompt("Nombre de la ciudad");
                    año=prompt("Año");
                    mes=prompt("Mes");
                    dia=prompt("Dia");
                    reciba=prompt("Recibe:");
                    
                    
                    document.getElementById("demo20").innerHTML=nombre;
                    document.getElementById("demo21").innerHTML=cantidad;
                    document.getElementById("demo22").innerHTML=concepto;
                    document.getElementById("demo23").innerHTML=sitio;
                    document.getElementById("demo24").innerHTML=dia;
                    document.getElementById("demo25").innerHTML=mes;
                    document.getElementById("demo26").innerHTML=año;
                    document.getElementById("demo27").innerHTML=reciba;
                    
                    



                    }





                    </script>











                    </div>

                </div>
                
                
                <!-- ========== End bs5-row y hacemos 2 columnas ========== -->


                      

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
                    <button type="button" class="btn btn-primary" onclick="recibo()">Crear</button>
                        
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

    <!-- ========== End bs5-modal2 ========== -->
    
    </div>
  </div>

        <!-- ========== End efectivo ========== -->

        </div>

    </div>
    
    

        









</div>
        

         <!-- ========== End bs5-accordion-default ========== -->
        
            </div>
        </div>

        <!-- ========== End bs5-border ========== -->   
        
            </div>
        </div>

        <!-- ========== End bs5-row ========== --> 
        










        
        </main>
        <footer style="margin-top: -300px;">
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
