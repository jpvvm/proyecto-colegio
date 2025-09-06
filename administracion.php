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
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="">
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="">
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="">
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="">
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>                        
                        <tr class="">
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="">
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>                                                
                    </tbody>
                </table>
            </div>

            <button type="button" class="btn btn-danger" onclick="libro_diario()">Registrar</button>
            
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
