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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Monoton&display=swap');
   </style>
<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="index.html" class="navbar-brand px-lg-4 m-0">
                <h1 style= "font-family:monoton; font-weight: 70 !important" class="m-0 display-4 text-uppercase text-white">BO
                    <span class="larger-k">K</span>
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
</div>     
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Acerca de Bokdos</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="">Inicio</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Acerca</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Sobre nosotros</h4>
                <h1 class="display-4">Nuestra Trayectoria</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Nuestra Historia</h1>
                    <h5 class="mb-3">Transformando pasión en dulzura desde 2018</h5>
                    <div style="text-align: justify;">
                      <p>Su inicio en 2018 como un pasatiempo en el colegio, BOKDOS ha evolucionado hasta convertirse en un negocio en crecimiento. Lo que comenzó como una pasión personal por la repostería se ha transformado en un emprendimiento que ofrece deliciosos brownies, galletas y dulces artesanales. Con dedicación y amor por el arte culinario, hemos logrado conquistar a nuestros clientes y expandir nuestras operaciones.</p>
                    </div>
                    <div class="text-center">
                        <a href="" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Ver más</a>
</div>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Nuestra Visión</h1>
                    <div style="text-align: justify;">
                    <p>Nos comprometemos a innovar constantemente en nuestras recetas y procesos, manteniendo siempre la esencia de nuestra pasión por la repostería. Queremos expandir nuestras operaciones a nivel nacional y eventualmente internacional, llevando la dulzura y el amor por el arte culinario a todos los rincones del mundo.</p>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Somos Excelencia</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Exquisitez en un bocado</h5>
                    <div class="text-center">
                         <a href="menu.php" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Menú</a>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

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
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
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
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Correo">
                        <div class="input-group-append">
                            <button class="btn btn-primary font-weight-bold px-3">Registrarse</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="#">BOKDOS</a>. All Rights Reserved.</a></p>
            <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://htmlcodex.com">ASTRID MARQUINA</a></p>
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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

<!-- Modal Registro -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
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
                        <input type="email" class="form-control" name="email" placeholder="Ingrese su correo electrónico">
                    </div>
                    <div class="form-group">
                        <label for="registerPassword">Contraseña</label>
                        <input type="password" class="form-control" name="pass" placeholder="Ingrese su contraseña">
                    </div>
                    <div class="d-flex flex-column align-items-center">
                    <button type="submit" class="btn btn-primary mt-4">Registrarse</button>
                    <p class="terminoa mt-2">¿Ya tienes cuenta? <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#registerModal2" class="cambio-mod2">Inicia Sesión</a></p>
                    </div>
                </form>

                <hr>
            </div>
        </div>
    </div>
</div>
             
<!--Modal Inicio de sesion  -->
<div class="modal fade" id="registerModal2" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
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
                        <input type="email" class="form-control" name="email" placeholder="Ingrese su correo electrónico">
                    </div>
                    <div class="form-group">
                        <label for="registerPassword">Contraseña</label>
                        <input type="password" class="form-control" name="pass" placeholder="Ingrese su contraseña">
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <button type="submit" class="btn btn-primary mb-2 mt-4">Iniciar Sesión</button>
                        <p class="terminoa">¿Primera vez por aquí? <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#registerModal" class="cambio-mod">Regístrate</a></p>
                    </div>
                </form>
                <hr>
            </div>
        </div>
    </div>
</div>




</html>