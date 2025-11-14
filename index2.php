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
                 <!-- bs5-border (hacemos un contendor)-->
        <div
            class="card border-secondary"
            style="width: 400px; margin-top:100px; background-color:tomato"
        >
            <img class="card-img-top" src="holder.js/100px180/" alt="Title" />
            <div class="card-body">

                <!-- Hacemos un formulario pero cambiamos el "action" por "name" -->

                <form name="login" method="post">
                <!-- bs5-input. Se le añade "value" -->
                <div class="mb-3">
                    <label for="" class="form-label">USUARIO</label>
                    <input
                        type="text"
                        class="form-control"
                        name="usuario"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                        style="width: 300px"
                        value=""

                    />
                    
                </div>
                <br>
                <!-- bs5-input -->
                 <div class="mb-3">
                    <label for="" class="form-label">CONTRASEÑA</label>
                    <input
                        type="password" 
                        class="form-control"
                        name="password"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                        style="width: 300px"
                        value=""
                    />
                    
                 </div>
                 <br>
                 <!-- button -->
                  <button type="button" class="btn btn-danger" onclick="Login()">Entrar</button>        <!--- IMPORTANTÍSIMO PONER "type=button" o no hace bien el login-->

                </form>





            </div>
        </div>

        <!-- Hacemos el script para crear el evento. Este Login con mayúscula es el evento. NO confundir con "login" que es el name= del form de arriba-->
        
        <script>

        function Login(){

        var usuario = document.login.usuario.value;
        var password = document.login.password.value;

        if (usuario=="adm" && password=="123"){
            window.location="inicio.php";            // Como es el usuario ADMINISTRADOR. Va a "inicio.php"
        }

        else if (usuario=="secre" && password=="123"){
            window.location="inicio2.php";            // Como es el usuario SECRETARIA. Va a "inicio2.php"
        }

        else if (usuario=="prof" && password=="123"){
            window.location="inicio3.php";            // Como es el usuario PROFESOR. Va a "inicio3.php"
        }
        
        else{
            alert("Usuario no autorizado");
        }

        }    

        </script>








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
