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
            <?php include 'log/header.php' ?>
        </header>
        <main>


        <!---- bs5-container--->

        <div
            class="container"
        >
            <div style="text-align: center;">
            <h2>REGISTRO DE NOTAS</h2>

            <a href="curso1.php"><button type="button" class="btn btn-primary">(IFCD0210)</button></a>
                <a href="curso2.php"><button type="button" class="btn btn-primary">(IFCD0203)</button></a>
                    <a href=""><button type="button" class="btn btn-primary">(IFCD0214)</button></a>

            </div>
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
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="">
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="">
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="">
                            <td id="">Nota Final:</td>
                            <td></td>
                            <td>            <button type="button" class="btn btn-success" style="float: right;">Calcular</button>                </td>
                            
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
                                <!----- bs5-input-->
                                <div class="mb-3">
                                    <label for="" class="form-label">Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name=""
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                                </div>
                                
                            </td>
                            <td>

                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name=""
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                />
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            



                            </td>
                            <td>
                                <!---- bs5-select-->


                                <div class="mb-3">
                                    <label for="" class="form-label">City</label>
                                    <select
                                        class="form-select form-select-lg"
                                        name=""
                                        id=""
                                    >
                                        <option selected>Seleccione</option>
                                        <option value="">Aprobado</option>
                                        <option value="">Suspenso</option>
                                        
                                    </select>
                                </div>
                                
                            </td>
                        </tr>
                        <tr class="">
                            <td scope="row">        <button type="reset" class="btn btn-danger">BORRAR</button>               </td>
                            <td>
                                
                            
                            <!-- HACEMOS UN BS5-MODAL-DEFAULT. Modal trigger button -->
                            <button
                                type="button"
                                class="btn btn-primary btn-lg"
                                data-bs-toggle="modal"
                                data-bs-target="#modalId"
                            >
                                Consultar Notas
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
                                const myModal = new bootstrap.Modal(
                                    document.getElementById("modalId"),
                                    options,
                                );
                            </script>
                            </td>
                            <td>                    <button type="submit" class="btn btn-success">Registrar Nota</button>                       </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            










        </div>
        










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
