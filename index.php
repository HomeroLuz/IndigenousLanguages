<!--
    @Autor: Homero Luz
-->
<?php
    include('config/config.php');
?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Lenguas indígenas</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--Header-->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                        <h1 class="texto tamtex1">LENGUAS INDÍGENAS</h1>
                        <h5 class="texto tamtex2">Laboratorio de simulación y cómputo avanzado UMSNH</h5>
                    </div>
                    <div class="hidden-xs col-sm-6 col-md-4 col-lg-4 centrar">
                        <a href="#"><img src="img/header1.png" alt=""></a>
                        <a href="#"><img src="img/header2.png" alt=""></a>
                        <!-- <a href="#"><img src="img/header3.png" alt=""></a> -->
                    </div>
                </div>
            </div>
        </header>

        <!--Barra de Navegacion-->
        <?php
            session_start();
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        ?>
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Cambiar Navegacion</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <?php
                        if($_SESSION['type'] == 0){
                    ?>
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="views/register.php">Nuevo usuario</a></li>
                            <li><a href="views/languageRegister.php">Registro de lenguaje</a></li>
                            <li><a href="views/wordInformationRegister.php">Registrar nueva palabra</a></li>
                            <li><a href="views/abbreviations.php">Abreviaturas</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="controller/logout.php">Cerrar sesión</a></li>
                        </ul>
                    <?php
                        } else if($_SESSION['type'] == 1){ 
                    ?>
                        <ul class="nav navbar-nav">
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="controller/logout.php">Cerrar sesión</a></li>
                        </ul>
                    <?php
                        }
                    ?>
                </div>
            </nav>
        <?php
            } else {
        ?>
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Cambiar Navegacion</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">Inicio</a>
                    <a href="views/abbreviations.php" class="navbar-brand">Abreviaturas</a>
                </div>

                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <!-- <li><a href="index.php">Inicio</a></li> -->
                        <!-- <li><a href="views/abbreviations.php">Abreviaturas</a></li> -->
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="views/login.php">Ingresar</a></li>
                        <li><a href="views/userRegister.php">Registrarse</a></li>
                        <li><a href="#">Acerca de</a></li>
                    </ul>
                </div>
            </nav>
        <?php
            }
        ?>

        <div class="container">
            <!--Slider-->
            <section id="miSlide" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#miSlide" data-slide-to="0" class="active"></li>
                    <li data-target="#miSlide" data-slide-to="1"></li>
                    <li data-target="#miSlide" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active ">
                        <img src="img/banner1.jpg" class="adaptar">
                    </div>
                    <div class="item">
                        <img src="img/banner2.jpg" class="adaptar">
                    </div>
                    <div class="item">
                        <img src="img/banner3.jpg" class="adaptar">
                    </div>
                </div>

                <a href="#miSlide" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a href="#miSlide" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </section><br>

            <!--Contenidos Personalizados - Imagenes y Texto-->
            <section>
                <div class="row">
                    <!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="hidden-xs col-sm-3 col-md-6 col-lg-6">
                                <br><br><img src="img/exa1.jpg" class="img-responsive">
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-6 col-lg-6">
                                <h3>Tema 1</h3><hr>
                                <p align="justify">También conocido como PRUEBA DE SUDAN, SUDAN 3, QUÍMICO DE HECES o COPROFUNCIONAL.<br><a href="#">leer más</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="hidden-xs col-sm-3 col-md-6 col-lg-6">
                                <br><br><img src="img/exa2.jpg" class="img-responsive">
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-6 col-lg-6">
                                <h3>Examen Citologico</h3><hr>
                                <p align="justify">Es el análisis de células del cuerpo con un microscopio. Esto se hace para determinar cuál es su apariencia, cómo se forman y cómo funcionan.<br><a href="#">leer más</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="hidden-xs col-sm-3 col-md-6 col-lg-6">
                                <br><br><img src="img/exa3.jpg" class="img-responsive">
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-6 col-lg-6">
                                <h3>EGO</h3><hr>
                                <p align="justify">También llamado urianálisis, consta de un conjunto de pruebas que detectan y miden distintos componentes eliminados por los riñones en la orina, como células, bacterias y fragmentos celulares.<br><a href="#">leer más</a></p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </section>
        </div>

        <section class="color1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><br><br><br>
                        <!-- <video controls class="img-responsive">
                            <source src="video/introo.mp4" type="video/mp4"></source>
                        </video> -->
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <h3>Misión</h3><hr>
                        <p align="justify">Contar con un medio de comunicación efectivo entre las diferentes lenguas indígenas, mediante el vocabulario y recursos disponibles para el aprendizaje de las diferentes lenguas y el español.</p>
                        <!-- <ul>
                            <li><a href="#">Tema 1</a></li>
                            <li><a href="#">Tema 2</a></li>
                            <li><a href="#">Tema 3</a></li>
                            <li><a href="#">Tema 4</a></li>
                        </ul> -->
                    </div>
                </div>
            </div><br>
        </section>

        <section class="color2">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <h3 class="color3">Servicios</h3>
                        <ul>
                            <li>Vocabulario</li>
                            <li>Registro de usuario</li>
                            <li>Colaboración mediante un foro</li>
                        </ul>
                    </div>
                    <!-- <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <h3 class="color3">Servicios</h3>
                        <a href="#">Diseño Web</a><br>
                        <a href="#">Lenguajes de Programación</a><br>
                        <a href="#">App's de Facebook</a><br>
                        <a href="#">Eventos</a><br>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <h3 class="color3">Servicios</h3>
                        <a href="#">Diseño Web</a><br>
                        <a href="#">Lenguajes de Programación</a><br>
                        <a href="#">App's de Facebook</a><br>
                        <a href="#">Eventos</a><br>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <h3 class="color3">Servicios</h3>
                        <a href="#">Diseño Web</a><br>
                        <a href="#">Lenguajes de Programación</a><br>
                        <a href="#">App's de Facebook</a><br>
                        <a href="#">Eventos</a><br>
                    </div> -->
                </div>
            </div><br>
        </section>

        <footer class="color4">
            <center>
                <div class="container"><br>
                    <p>Powered by Homero Luz</p>
                    </br>
                </div>
            </center>
        </footer>


        
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
