<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BOKDOS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/icono.png" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/animaciones.css" rel="stylesheet">

</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Monoton&display=swap');
</style>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3 slide-up">
            <a href="index.html" class="navbar-brand px-lg-4 m-0">
                <h1 style="font-family:monoton; font-weight: 70 !important"
                    class="m-0 display-4 text-uppercase text-white">BO
                    <span style="font-size: 74px; position: relative; top: 7px;" class="larger-k-logo">K</span>
                    DOS
                </h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
            session_start();
            if (isset($_SESSION['nombre'])) {
                $nombre = $_SESSION['nombre'];
            }
            ?>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="index.php" class="nav-item nav-link active">Inicio</a>
                    <a href="about.php" class="nav-item nav-link">Acerca</a>
                    <a href="menu.php" class="nav-item nav-link">Menú</a>
                    <a href="contact.php" class="nav-item nav-link">Contacto</a>
                    <?php
                    if (isset($nombre)) {
                        ?>
                    <a href="#" class="nav-item nav-link">
                        <i class="fas fa-user"></i>
                        <?php echo $nombre; ?>
                    </a>
                    <a href="logout.php" class="nav-item nav-link">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                    <?php
                    } else {
                        ?>
                    <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#registerModal">
                        <i class="fas fa-user"></i> Registro
                    </a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </nav>
        <?php

        if (isset($nombre)) {
            ?>
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Buscar...">
                            <div class="input-group-append">
                                <button class="btn btn-primary">Buscar</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-1">
                        <div class="input-group">
                            <div class="input-group-append">
                                <button class="btn btn-white slide-up">
                                    <a href="carrito.php">
                                        <i class="fas fa-shopping-cart text-primary fa-2x"></i>
                                        <span class="badge badge-danger" id="cart-count">0</span>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        } else {
            ?>
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar...">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Buscar</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-1">
                    <div class="input-group">
                        <div class="input-group-append">
                            <button class="btn btn-white">
                                <a href="#" data-toggle="modal" data-target="#registerModal">
                                    <i class="fas fa-shopping-cart text-primary fa-2x"></i>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
        }
        ?>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">

        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/brownies2.JPG" alt="Image" width="800" height="800">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 id="tit1" class="text-primary font-weight-medium m-0">Donde el sabor se convierte en</h2>
                        <h1 id="tit2" class="display-1 text-white m-0">PLACER</h1>
                        <h2 id="tit2" class="text-white m-0"> DESDE 2018 </h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/COOKIES.JPG" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 id="tit4" class="text-primary font-weight-medium m-0">Donde el sabor se convierte en </h2>
                        <h1 id="tit5" class="display-1 text-white m-0">SONRISAS</h1>
                        <h2 id="tit6" class="text-white m-0"> DESDE 2018 </h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->



    <!-- Service Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Servicios</h4>
                <h1 class="display-4">¿Qué ofrecemos?</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-5.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-truck service-icon"></i>Alta Calidad</h4>
                            <p class="m-0"> Ingredientes frescos y de primera calidad, lo que garantiza un sabor
                                superior en todos sus productos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-7.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-coffee service-icon"></i>Productos Artesanales</h4>
                            <p class="m-0">
                                Personalizamos los productos según las preferencias y necesidades de los clientes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-6.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-award service-icon"></i>Personalización y Creatividad</h4>
                            <p class="m-0"> Opciones personalizadas para decoraciones y empaques,
                                lo que permite que los productos sean únicos y especiales para cada ocasión.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-8.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-table service-icon"></i>Asesoría Garantizada</h4>
                            <p class="m-0">Nuestro experto equipo está disponible en línea para proporcionar
                                recomendaciones
                                y asegurar una experiencia de compra satisfactoria.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Offer Start -->
    <div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
        <div class="container py-5">
            <h1 class="display-3 text-primary mt-3">25% OFF</h1>
            <h1 class="text-white mb-3">Oferta Especial de Domingo</h1>
            <h4 class="text-white font-weight-normal mb-4 pb-3">Del 15 al 30 de junio de 2024</h4>
            <form class="form-inline justify-content-center mb-4">
                <div class="input-group">
                    <input type="text" class="form-control p-4" placeholder="Correo electrónico" style="height: 60px;">
                    <div class="input-group-append">
                        <button class="btn btn-primary font-weight-bold px-4" type="submit">Registrarse</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonio</h4>
                <h1 class="display-4">Nuestros clientes</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3"> <img class="img-fluid" src="img/testimonial-1.jpg"
                            alt="">
                        <div class="ml-3">
                            <h4>Jesús Nieto</h4> <i>Diseñador Gráfico</i>
                        </div>
                    </div>
                    <p class="m-0">"BOKDOS ha llevado los dulces a otro nivel. ¡La calidad y el sabor son
                        impresionantes!"</p>
                    <div class="text-warning mt-2"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i
                            class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i> </div>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3"> <img class="img-fluid" src="img/testimonial-2.jpg"
                            alt="">
                        <div class="ml-3">
                            <h4>Ingrid Medina</h4> <i>Contador Público</i>
                        </div>
                    </div>
                    <p class="m-0">"Los dulces de BOKDOS son una delicia inigualable, cada bocado es una experiencia
                        celestial." </p>
                    <div class="text-warning mt-2"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i
                            class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i> </div>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3"> <img class="img-fluid" src="img/testimonial-3.jpg"
                            alt="">
                        <div class="ml-3">
                            <h4>Marisela Velásquez</h4> <i>Administrador Comercial</i>
                        </div>
                    </div>
                    <p class="m-0">"¡Los brownies y galletas de BOKDOS son simplemente perfectos! Su sabor es
                        insuperable."</p>
                    <div class="text-warning mt-2"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i
                            class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </div>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3"> <img class="img-fluid" src="img/testimonial-4.jpg"
                            alt="">
                        <div class="ml-3">
                            <h4>Lony Rojas</h4> <i>Publicista</i>
                        </div>
                    </div>
                    <p class="m-0">"Las galletas y brownies de BOKDOS son una maravilla. ¡Nunca había probado algo tan
                        divino!"</p>
                    <div class="text-warning mt-2"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i
                            class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </div>
                </div>
            </div>
        </div>
    </div> <!-- Testimonial End -->

    <!-- Footer Start -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Contacto</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Pampatar, Isla de Margarita</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+58 412-3545556</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>bokdos@gmail.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Síguenos</h4>
                <p>Puedes encontrarnos en...</p>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2"
                        href="https://www.instagram.com/bokdos_1?igsh=MWczeTN1eXA3d3pu&utm_source=qr"><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://wa.link/ety2lt"><i
                            class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Horario</h4>
                <div>
                    <h6 class="text-white text-uppercase">Lunes - Viernes</h6>
                    <p>8.00 AM - 8.00 PM</p>
                    <h6 class="text-white text-uppercase">Sábado - Domingo</h6>
                    <p>2.00 PM - 8.00 PM</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Más Información</h4>
                <p>Déjanos tu correo electrónico y recibirás de lo nuevo de BOKDOS</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;"
                            placeholder="Correo">
                        <div class="input-group-append">
                            <button class="btn btn-primary font-weight-bold px-3">Registrarse</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5"
            style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="#">BOKDOS</a>. Todos los
                derechos reservados.</a></p>
            <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://htmlcodex.com">ASTRID
                    MARQUINA</a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
</body>

<!-- Modal Registro -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Registro </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="registerForm" action="registro.php" method="POST">
                    <div class="form-group">
                        <label for="registerName">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre">
                    </div>
                    <div class="form-group">
                        <label for="registerName">Apellido</label>
                        <input type="text" class="form-control" name="apellido" placeholder="Ingrese su apellido">
                    </div>
                    <div class="form-group">
                        <label for="registerEmail">Correo Electrónico</label>
                        <input type="email" class="form-control" name="email"
                            placeholder="Ingrese su correo electrónico">
                    </div>
                    <div class="form-group">
                        <label for="registerPassword">Contraseña</label>
                        <input type="password" class="form-control" name="pass" placeholder="Ingrese su contraseña">
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <button type="submit" class="btn btn-primary mt-4">Registrarse</button>
                        <p class="terminoa mt-2">¿Ya tienes cuenta? <a href="#" data-toggle="modal" data-dismiss="modal"
                                data-target="#registerModal2" class="cambio-mod2">Inicia Sesión</a></p>
                    </div>
                </form>

                <hr>
            </div>
        </div>
    </div>
</div>

<!--Modal Inicio de sesion  -->
<div class="modal fade" id="registerModal2" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Inicio Sesión </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="registerForm" action="login.php" method="POST">
                    <div class="form-group">
                        <label for="registerEmail">Correo Electrónico</label>
                        <input type="email" class="form-control" name="email"
                            placeholder="Ingrese su correo electrónico">
                    </div>
                    <div class="form-group">
                        <label for="registerPassword">Contraseña</label>
                        <input type="password" class="form-control" name="pass" placeholder="Ingrese su contraseña">
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <button type="submit" class="btn btn-primary mb-2 mt-4">Iniciar Sesión</button>
                        <p class="terminoa">¿Primera vez por aquí? <a href="#" data-toggle="modal" data-dismiss="modal"
                                data-target="#registerModal" class="cambio-mod">Regístrate</a></p>
                    </div>
                </form>
                <hr>
            </div>
        </div>
    </div>
</div>

<!--Modal Inicio de sesion -->
<script>
// Leer el carrito del localStorage
const carrito = JSON.parse(localStorage.getItem('carrito')) || [];

// Mostrar la cantidad de productos en el span
document.getElementById('cart-count').textContent = carrito.length;
</script>

</html>