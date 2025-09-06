<!doctype html>
<html lang="en">
    <head>
        <title>REGISTRO DE ESTUDIANTES</title>
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

        <?php include 'log/header.php' ?>

        </header>
        <main>


        <div
            class="card border-primary"
            style="border:2px solid black; background-color: silver"; 
        >
            
            <div class="card-body">
                <h4 class="card-title" style="text-align: center;">REGISTRO DE ESTUDIANTES</h4>


                <div
                    class="row justify-content-center align-items-center g-2"
                >
                    <div class="col">

                    <form action="conexion/registro.php" method="post">

                    <div class="mb-3"
                    style="margin-left: 100px;">
                        <label for="" class="form-label">Codigo</label>
                        <input
                            type="text"
                            class="form-control"
                            name="codigo"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                            
                        />
                        

                    </div>
                    </div>
                    

                </div>
                

                    <div
                        class="row justify-content-center align-items-center g-2"
                    >
                        <div class="col"
                        style="margin-left: 100px;">

                        <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                            <input
                                type="text"
                                class="form-control"
                                name="nombre"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                                
                            />
                            
                        </div>
                        

                        </div>
                        <div class="col">
                            
                        <div class="mb-3">
                            <label for="" class="form-label">Identificacion</label>
                            <input
                                type="text"
                                class="form-control"
                                name="identificacion"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                                
                            />
                            
                        </div>
                        


                        </div>
                        <div class="col">


                        <div class="mb-3">
                            <label for="" class="form-label">Telefono</label>
                            <input
                                type="text"
                                class="form-control"
                                name="telefono"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                                
                            />
                            
                        </div>
                        


                        </div>
                    </div>
                    
                
                    <div
                        class="row justify-content-center align-items-center g-2"
                        style="margin-left: 100px;"
                    >
                        
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label">Dirección</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="direccion"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                    style="width: 500px;"
                                />
                                
                            </div>
                            
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label">Correo electronico</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="mail"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                    style="width: 500px;"
                                />
                                
                            </div>
                            
                        </div>
                    </div>



                    <div
                        class="row justify-content-center align-items-center g-2"
                        style="margin-left:100px;"
                    >

                        <div class="col">

                        <div class="mb-3">
                            <label for="" class="form-label">Curso</label>
                            <select
                                class="form-select form-select-lg"
                                name="curso"
                                id=""
                            >
                                <option selected>Curso a registrar</option>
                                <option value="1">PHP</option>
                                <option value="2">ASP</option>
                                <option value="3">JSP</option>
                            </select>
                        </div>
                        
             
                            
            <button type="submit" class="btn btn-danger" style="float: right; width:150px" onclick="registro()">REGISTRAR</button>

            <button type="reset" class="btn btn-danger" style="width:150px">BORRAR</button>


            </form>

                        </div>


            <script>

            function registro(){
                alert("se registró correctamente")
            }


            </script>

















                    </div>             
                    
    


            </div>



        </div>
        

                















        </main>
        <footer style="margin-top: -450px;">
        
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