<!DOCTYPE html>
<html lang="es">

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/animaciones.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
    .swal2-confirm {
        background-color: #33211D !important;
        /* Cambia el color de fondo */

    }
</style>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Monoton&display=swap');

    .btn:hover {
        transform: scale(1.05);
    }

    .btn:hover:hover {
        color: white;
    }
</style>

<body>
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="php/index.php" class="navbar-brand px-lg-4 m-0">
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
                    <a href="index.php" class="nav-item nav-link">Inicio</a>
                    <a href="about.php" class="nav-item nav-link ">Acerca</a>
                    <a href="menu.php" class="nav-item nav-link active">Menú</a>
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
    <div id="cont2" class="container-fluid page-header mb-3 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5"
            style="min-height: 300px">
            <h1 id="titulo3" class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Menú</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="">Inicio</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Menú</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid pt-5 ">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menú y Precios</h4>
                <h1 class="display-4">Bokdos </h1>
                <div class="d-inline-block mt-4">
                    <a href="carrito.php">
                        <button class="btn btn-primary btn-lg shadow rounded-pill"
                            style="background-color: #DA9F5B; ; ">
                            <i class="fas fa-shopping-cart fa-lg"></i>
                            <span class="text-uppercase">Ver mi carrito</span>
                        </button>
                    </a>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mb-5" style="text-align: center;">Galletas</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/Galleta1.jpg" alt="">
                            <h5 class="menu-price">$2</h5>
                        </div>

                        <?php
                        if (isset($nombre)) {
                            ?>
                            <div class="col-8 col-sm-9">
                                <div class="d-flex justify-content-between mr-2">
                                    <h4>Classic Cookie</h4>
                                    <a href="#" data-toggle="modal" data-target="#modalAddToCart"
                                        onclick="agregarAlCarrito('1', 'Classic Cookie', '2', 'Disfruta de nuestra clásica galleta con trocitos de chocolate, una delicia crujiente y deliciosa que te transportará a los recuerdos de la infancia.', 'img/Galleta1.jpg')">
                                        <i class="fas fa-shopping-cart text-primary fa-2x"></i>
                                    </a>
                                </div>
                                <p class="m-0">Disfruta de nuestra clásica galleta con trocitos de chocolate, una delicia
                                    crujiente y deliciosa que te transportará a los recuerdos de la infancia.</p>
                            </div>
                        </div>
                        <div class="row align-items-center mb-5">
                            <div class="col-4 col-sm-3">
                                <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/galleta2.jpg" alt="">
                                <h5 class="menu-price">$3</h5>
                            </div>
                            <div class="col-8 col-sm-9">
                                <div class="d-flex justify-content-between mr-2">
                                    <h4>Monster Cookie</h4>
                                    <a href="#" data-toggle="modal" data-target="#modalAddToCart"
                                        onclick="agregarAlCarrito('2' , 'Monster Cookie', '3' ,'Prepárate para una explosión de sabor con nuestra galleta monstruosa! Llena de trozos de chocolate, nueces y chispas de colores. Ideal para los amantes de las combinaciones audaces y deliciosas.', 'img/galleta2.jpg')">
                                        <i class="fas fa-shopping-cart text-primary fa-2x"></i>
                                    </a>
                                </div>
                                <p class="m-0">Prepárate para una explosión de sabor con nuestra galleta monstruosa! Llena
                                    de trozos de chocolate, nueces y chispas de colores. Ideal para los amantes de las
                                    combinaciones audaces y deliciosas.</p>
                            </div>
                        </div>
                        <div class="row align-items-center mb-5">
                            <div class="col-4 col-sm-3">
                                <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/galleta3.jpg" alt="">
                                <h5 class="menu-price">$3.5</h5>
                            </div>
                            <div class="col-8 col-sm-9 ">
                                <div class="d-flex justify-content-between mr-2">
                                    <h4>Velvet Cookie</h4>
                                    <a href="#" data-toggle="modal" data-target="#modalAddToCart"
                                        onclick="agregarAlCarrito('3', 'Velvet Cookie', '3.5', 'Sumérgete en la suavidad y elegancia de nuestra galleta de terciopelo. Con un interior suave y un ligero toque de dulzura. Perfecta para aquellos que buscan una experiencia gourmet única.', 'img/galleta3.jpg')">
                                        <i class="fas fa-shopping-cart text-primary fa-2x"></i>
                                    </a>
                                </div>
                                <p class="m-0">Sumérgete en la suavidad y elegancia de nuestra galleta de terciopelo. Con un
                                    interior suave y un ligero toque de dulzura. Perfecta para aquellos que buscan una
                                    experiencia gourmet única.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="mb-5" style="text-align: center;">Brownies</h1>
                        <div class="row align-items-center mb-5">
                            <div class="col-4 col-sm-3">
                                <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/brownie1.jpg" alt="">
                                <h5 class="menu-price">$3</h5>
                            </div>
                            <div class="col-8 col-sm-9">
                                <div class="d-flex justify-content-between mr-2">
                                    <h4>Fudgy Brownie</h4>
                                    <a href="#" data-toggle="modal" data-target="#modalAddToCart"
                                        onclick="agregarAlCarrito('4', 'Fudgy Brownie', '3', 'Déjate tentar por nuestro brownie esponjoso y lleno de sabor a chocolate. Con una textura densa y un intenso sabor a cacao, este brownie es el postre perfecto para los amantes del chocolate.', 'img/brownie1.jpg')">
                                        <i class="fas fa-shopping-cart text-primary fa-2x"></i>
                                    </a>
                                </div>
                                <p class="m-0">Déjate tentar por nuestro brownie esponjoso y lleno de sabor a chocolate. Con
                                    una textura densa y un intenso sabor a cacao, este brownie es el postre perfecto para
                                    los amantes del chocolate.</p>
                            </div>
                        </div>
                        <div class="row align-items-center mb-5">
                            <div class="col-4 col-sm-3">
                                <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/brownie2.jpg" alt="">
                                <h5 class="menu-price">$3.5</h5>
                            </div>
                            <div class="col-8 col-sm-9">
                                <div class="d-flex justify-content-between mr-2">
                                    <h4>Walnut Brownie</h4>
                                    <a href="#" data-toggle="modal" data-target="#modalAddToCart"
                                        onclick="agregarAlCarrito('5', 'Walnut Brownie', '3.5', 'Disfruta de la combinación perfecta de nueces crujientes y chocolate en nuestro brownie de nueces. Cada bocado está lleno de sabor y textura, una experiencia única para tu paladar.', 'img/brownie2.jpg')">
                                        <i class="fas fa-shopping-cart text-primary fa-2x"></i>
                                    </a>
                                </div>
                                <p class="m-0">Disfruta de la combinación perfecta de nueces crujientes y chocolate en
                                    nuestro brownie de nueces. Cada bocado está lleno de sabor y textura, una experiencia
                                    única para tu paladar.</p>
                            </div>
                        </div>
                        <div class="row align-items-center mb-5">
                            <div class="col-4 col-sm-3">
                                <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/brownie3.jpg" alt="">
                                <h5 class="menu-price">$4</h5>
                            </div>
                            <div class="col-8 col-sm-9">
                                <div class="d-flex justify-content-between mr-2">
                                    <h4>Cheesecake Brownie</h4>
                                    <a href="#" data-toggle="modal" data-target="#modalAddToCart"
                                        onclick="agregarAlCarrito('6', 'Cheesecake Brownie', '4', 'Experimenta la fusión perfecta entre un brownie decadente y un suave cheesecake en nuestro cheesecake brownie. Este postre es una delicia indulgente que no querrás perderte.', 'img/brownie3.jpg')">
                                        <i class="fas fa-shopping-cart text-primary fa-2x"></i>
                                    </a>
                                </div>
                                <p class="m-0">Experimenta la fusión perfecta entre un brownie decadente y un suave
                                    cheesecake en nuestro cheesecake brownie. Este postre es una delicia indulgente que no
                                    querrás perderte.</p>
                            </div>
                        </div>
                        <?php
                        } else {
                            ?>
                        <div class="col-8 col-sm-9">
                            <div class="d-flex justify-content-between mr-2">
                                <h4>Classic Cookie</h4>
                                <a href="#" class="nav-item nav-link" data-target="#registerModal"
                                    onclick="agregarAlCarrito('1', 'Classic Cookie', '2', 'Disfruta de nuestra clásica galleta con trocitos de chocolate, una delicia crujiente y deliciosa que te transportará a los recuerdos de la infancia.', 'img/Galleta1.jpg')">
                                    <i class="fas fa-shopping-cart text-primary fa-2x"></i>
                                </a>
                            </div>
                            <p class="m-0">Disfruta de nuestra clásica galleta con trocitos de chocolate, una delicia
                                crujiente y deliciosa que te transportará a los recuerdos de la infancia.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/galleta2.jpg" alt="">
                            <h5 class="menu-price">$3</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <div class="d-flex justify-content-between mr-2">
                                <h4>Monster Cookie</h4>
                                <a href="#" class="nav-item nav-link"
                                    onclick="agregarAlCarrito('2' , 'Monster Cookie', '3' ,'Prepárate para una explosión de sabor con nuestra galleta monstruosa! Llena de trozos de chocolate, nueces y chispas de colores. Ideal para los amantes de las combinaciones audaces y deliciosas.', 'img/galleta2.jpg')">
                                    <i class="fas fa-shopping-cart text-primary fa-2x"></i>
                                </a>
                            </div>
                            <p class="m-0">Prepárate para una explosión de sabor con nuestra galleta monstruosa! Llena
                                de trozos de chocolate, nueces y chispas de colores. Ideal para los amantes de las
                                combinaciones audaces y deliciosas.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/galleta3.jpg" alt="">
                            <h5 class="menu-price">$3.5</h5>
                        </div>
                        <div class="col-8 col-sm-9 ">
                            <div class="d-flex justify-content-between mr-2">
                                <h4>Velvet Cookie</h4>
                                <a href="#" class="nav-item nav-link"
                                    onclick="agregarAlCarrito('3', 'Velvet Cookie', '3.5', 'Sumérgete en la suavidad y elegancia de nuestra galleta de terciopelo. Con un interior suave y un ligero toque de dulzura. Perfecta para aquellos que buscan una experiencia gourmet única.', 'img/galleta3.jpg')">
                                    <i class="fas fa-shopping-cart text-primary fa-2x"></i>
                                </a>
                            </div>
                            <p class="m-0">Sumérgete en la suavidad y elegancia de nuestra galleta de terciopelo. Con un
                                interior suave y un ligero toque de dulzura. Perfecta para aquellos que buscan una
                                experiencia gourmet única.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-5" style="text-align: center;">Brownies</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/brownie1.jpg" alt="">
                            <h5 class="menu-price">$3</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <div class="d-flex justify-content-between mr-2">
                                <h4>Fudgy Brownie</h4>
                                <a href="#" class="nav-item nav-link"
                                    onclick="agregarAlCarrito('4', 'Fudgy Brownie', '3', 'Déjate tentar por nuestro brownie esponjoso y lleno de sabor a chocolate. Con una textura densa y un intenso sabor a cacao, este brownie es el postre perfecto para los amantes del chocolate.', 'img/brownie1.jpg')">
                                    <i class="fas fa-shopping-cart text-primary fa-2x"></i>
                                </a>
                            </div>
                            <p class="m-0">Déjate tentar por nuestro brownie esponjoso y lleno de sabor a chocolate. Con
                                una textura densa y un intenso sabor a cacao, este brownie es el postre perfecto para
                                los amantes del chocolate.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/brownie2.jpg" alt="">
                            <h5 class="menu-price">$3.5</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <div class="d-flex justify-content-between mr-2">
                                <h4>Walnut Brownie</h4>
                                <a href="#" class="nav-item nav-link"
                                    onclick="agregarAlCarrito('5', 'Walnut Brownie', '3.5', 'Disfruta de la combinación perfecta de nueces crujientes y chocolate en nuestro brownie de nueces. Cada bocado está lleno de sabor y textura, una experiencia única para tu paladar.', 'img/brownie2.jpg')">
                                    <i class="fas fa-shopping-cart text-primary fa-2x"></i>
                                </a>
                            </div>
                            <p class="m-0">Disfruta de la combinación perfecta de nueces crujientes y chocolate en
                                nuestro brownie de nueces. Cada bocado está lleno de sabor y textura, una experiencia
                                única para tu paladar.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/brownie3.jpg" alt="">
                            <h5 class="menu-price">$4</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <div class="d-flex justify-content-between mr-2">
                                <h4>Cheesecake Brownie</h4>
                                <a href="#" class="nav-item nav-link"
                                    onclick="agregarAlCarrito('6', 'Cheesecake Brownie', '4', 'Experimenta la fusión perfecta entre un brownie decadente y un suave cheesecake en nuestro cheesecake brownie. Este postre es una delicia indulgente que no querrás perderte.', 'img/brownie3.jpg')">
                                    <i class="fas fa-shopping-cart text-primary fa-2x"></i>
                                </a>
                            </div>
                            <p class="m-0">Experimenta la fusión perfecta entre un brownie decadente y un suave
                                cheesecake en nuestro cheesecake brownie. Este postre es una delicia indulgente que no
                                querrás perderte.</p>
                        </div>
                    </div>
                    <?php
                        }
                        ?>
            </div>
        </div>
    </div>
    </div>
    <!-- Menu End -->


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

    <!-- Modal agregar al carrito -->
    <!-- Modal -->
    <!-- <div class="modal fade" id="modalAddToCart" tabindex="-1" role="dialog" aria-labelledby="modalAddToCart"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Notificacion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center flex-column">
                    <i class="fas fa-check-circle text-success fa-3x mb-3"></i>
                    <h3 class="d-flex align-items-center text-center">Producto agregado exitosamente</h3>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Modal agregar al carrito -->




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


    <script>
        function agregarAlCarrito(id, nombre, precio, descripcion, imagen) {
            // Obtener el carrito actual del localStorage
            let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

            // Crear el nuevo producto
            let producto = {
                id: id,
                nombre: nombre,
                precio: precio,
                descripcion: descripcion,
                imagen: imagen
            };

            // Agregar el producto al carrito
            carrito.push(producto);

            // Guardar el carrito actualizado en el localStorage
            localStorage.setItem('carrito', JSON.stringify(carrito));
            // Mostrar modal con sweetAlert
            Swal.fire({
                title: 'Producto agregado al carrito',
                text: `1 ${producto.nombre}`,
                icon: 'success',
                confirmButtonText: 'Cerrar'
            })
        }
    </script>

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

</html>