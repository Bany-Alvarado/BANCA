<html>

<head>
    <title>Cryptos</title>
    <link rel="stylesheet" href="../../style.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="icon" href="../../img/core-img/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
                                    <!-- <li><a>Bienvenido <?php echo $_SESSION['username']; ?> </a></li> -->
                                    <li><a href="../../index.php">Volver</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <section class="hero-area">
        <form action="SaveUsuario.php" method="POST">
            <div class="container">
                <label for="nombre"><b>Nombre</b></label>
                <input type="text" placeholder="Nombre" name="nombre" required>
                <label for="Apellido"><b>Apellido</b></label>
                <input type="text" placeholder="Apellido" name="apellido" required>
                <label for="dpi"><b>DPI</b></label>
                <input type="text" placeholder="DPI" name="dpi" required>
                <label for="usuario"><b>Usuario</b></label>
                <input type="text" placeholder="Usuario" name="usuario" required>
                <label for="Email"><b>Email</b></label>
                <input type="email" placeholder="Email" name="email" required>
                <label for="password"><b>password</b></label>
                <input type="password" placeholder="password" name="password" required>
                <label for="tipo_cta"><b>Tipo de Cuenta</b></label>
                <select type="select" name="tipo_cta">
                    <option value="47051d23-edca-11e9-a98e-54e1ad54d8cf">Monetaria</option>
                    <option value="4d57dbeb-edca-11e9-a98e-54e1ad54d8cf">Ahorro</option>
                </select>
                <label for="cuenta"><b>NO. Cuenta</b></label>
                <input type="number" placeholder="NO. Cuenta" name="cuenta" value="<?php echo rand(100000000, 999999999);?>" required readonly>
                <button type="submit" name="btn_Save">Guardar</button>
                <button class="red" onclick="window.location.href='../../index.php'" name="btn_cancel">Cancelar</button>
            </div>
        </form>
    </section>
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Main Footer Area -->
        <div class="main-footer-area section-padding-100-0 bg-img bg-overlay"
            style="background-image: url(../../../img/bg-img/bg-1.jpg);">
            <div class="container">
                <div class="row">

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a href="#"><img src="../../img/core-img/logo2.png" alt=""></a>
                            </div>
                            <p>Segundo proyecto de Desarrollo Web</p>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>