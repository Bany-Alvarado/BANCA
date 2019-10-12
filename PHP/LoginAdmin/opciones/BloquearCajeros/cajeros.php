<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
   echo "Inicia Sesion para acceder a este contenido.<br>";
   echo "<br><a href='login.html'>Login</a>";
   echo "<br><br><a href='index.html'>Registrarme</a>";
   header('Location:  ../../../../index.php');//redirige a la página de login si el usuario quiere ingresar sin iniciar sesion


exit;
}
?>
<html>

<head>
    <title>Ejemplo LocalStorage</title>
    <link rel="stylesheet" href="../../../../style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../../../../img/core-img/favicon.ico">
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
                        <a class="nav-brand" href="index.php"><img src="../../../../img/core-img/logo.png" alt=""></a>

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
                                    <li><a>Bienvenido <?php echo $_SESSION['username']; ?> </a></li>
                                    <li><a href="../panelOpciones.php">Volver</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="section-class">
        <center>

        <?php
            include '../../../../config.php';

            $mysqli = new mysqli($host_db, $user_db, $pass_db, $db_name);

            if($mysqli->connect_errno){exit;}

            
        $result = $mysqli->query("SELECT Nombre, correo, BLOQUEADO, ID FROM usuarios_cajeros");

        if ($result->num_rows > 0) {
            // output data of each row
            echo "<table class=\"table\">";
        echo "<thead>
            <tr>
            <th class=\"table__heading\">Nombre</th>
            <th class=\"table__heading\">Correo</th>
            <th class=\"table__heading\">Activo</th>
            </tr>
        </thead>";
        echo " <tbody>";
        while($row = $result->fetch_assoc()) {
            echo "<tr class=\"table__row\">";
            echo "<td class=\"table__content\">".$row['Nombre']."</td>";
            echo "<td class=\"table__content\">".$row['correo']."</td>";
            if($row['BLOQUEADO']){
                echo "<td class=\"table__content\"><a href='Activar.php?id=".$row['ID']."&status=".$row['BLOQUEADO']."'>Activar</a></td>";
            }else{
                echo "<td class=\"table__content\"><a href='Activar.php?id=".$row['ID']."&status=".$row['BLOQUEADO']."'>Desactivar</a></td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";

        } else {
            echo "0 results";
        }

        
        $mysqli->close();
        ?>
        </center>
    </section>
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Main Footer Area -->
        <div class="main-footer-area section-padding-100-0 bg-img bg-overlay"
            style="background-image: url(../../../../img/bg-img/bg-1.jpg);">
            <div class="container">
                <div class="row">

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a href="#"><img src="../../../../img/core-img/logo2.png" alt=""></a>
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