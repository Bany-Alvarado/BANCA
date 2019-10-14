<html>

<head>
    <title>Ejemplo LocalStorage</title>
    <link rel="stylesheet" href="../../style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        //     /*Funcion de Capturar, Almacenar datos y Limpiar campos*/
        //     $(document).ready(function () {
        //         $('#boton-guardar').click(function () {
        //             /*Captura de datos escrito en los inputs*/
        //             var nom = document.getElementById("nombretxt").value;
        //             var apel = document.getElementById("apellidotxt").value;
        //             /*Guardando los datos en el LocalStorage*/
        //             localStorage.setItem("Nombre", nom);
        //             localStorage.setItem("Apellido", apel);
        //             /*Limpiando los campos o inputs*/
        //             document.getElementById("nombretxt").value = "";
        //             document.getElementById("apellidotxt").value = "";
        //         });
        //     });

        //     /*Funcion Cargar y Mostrar datos*/
        //     $(document).ready(function () {
        //         $('#boton-cargar').click(function () {
        //             /*Obtener datos almacenados*/
        //             var nombre = localStorage.getItem("Nombre");
        //             var apellido = localStorage.getItem("Apellido");
        //             /*Mostrar datos almacenados*/
        //             document.getElementById("nombre").innerHTML = nombre;
        //             document.getElementById("apellido").innerHTML = apellido;
        //         });
        //     });
        // 
    </script>
</head>


<body>

    <header class="header-area">


        <!-- Navbar Area -->
        <div class="cryptos-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="cryptosNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.php"><img src="../../img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="../../index.php">Volver</a></li>
                                </ul>

                                <!-- Newsletter Form -->
                                <!-- <div class="header-newsletter-form">
                                    <form action="PHP/Login.php" method="post">
                                        <input type="text" name="user" id="user" placeholder="Usuario">
                                        <button type="submit">Login</button>
                                    </form>
                                </div> -->

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- <center>
        <h1>Ejemplo - localStorage</h1>

        <input type="text" placeholder="Nombre" id="nombretxt"> <br> <br>
        <input type="text" placeholder="Apellido" id="apellidotxt"><br> <br>
        <button id="boton-guardar">Guardar</button><br>

        <hr />
        Nombre almacenado:
        <label type="text" id="nombre"></label><br>
        Apellido almacenado:
        <label "text" id="apellido"></label><br>

        <button id="boton-cargar">
            Cargar elementos
        </button>
    </center> -->

    <hr />

</body>

</html>