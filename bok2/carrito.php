<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BOKDOS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">
    <link href="img/icono.png" rel="icon">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
    <link href="css/carrito.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
    <!-- Pasarela de pagos- stripe -->
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script
        src="https://www.paypal.com/sdk/js?client-id=AbbIY5aLIIFfnj5unsjD8SjXEdVABq4-wJ0_sWqWtXoXp43iprm7IVA4EF-kFDSjg8AhsrdI7z_Xhe-P&currency=USD">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Monoton&display=swap');

    .swal2-confirm {
        background-color: #33211D !important;
        /* Cambia el color de fondo */

    }
</style>

<body>

    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
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
                    <a href="index.php" class="nav-item nav-link">Inicio</a>
                    <a href="about.php" class="nav-item nav-link ">Acerca</a>
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
    <div id="gotas" class="container-fluid page-header mb-3 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5"
            style="min-height: 300px">
            <h1 id="titulo" class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Carrito de compras</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="">Inicio</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Menu</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Carrito start -->
    <main class="main-unique slide-up">
        <div class="container-unique">
            <div class="cart-container-unique">
                <div class="cart-left-unique">
                    <h2 class="cart-title-unique">Carrito (<span class="total-items" id="total-items">0</span>
                        artículos)
                    </h2>
                    <div class="cart-items-unique">

                    </div>

                    <div class="empty-cart-message">
                        No hay productos en el carrito.
                    </div>
                    <div class="d-inline-block mt-3 menu-button-container" style="display: none;">
                        <a href="menu.php">
                            <button class="menu-button btn btn-primary btn-sm shadow rounded-pill"
                                style="background-color: #DA9F5B; color: white;">
                                <span class="text-uppercase">Menú</span>
                            </button>
                        </a>
                    </div>
                    <div class="pagination">
                        <!-- Botones de paginación -->
                    </div>

                </div>



                <div class="cart-right-unique">
                    <div class="summary-unique">
                        <h3 class="summary-title-unique">Resumen de la Compra</h3>
                        <p class="summary-item-unique">Cantidad de artículos: <span class="summary-items"
                                id="summary-items"></span></p>
                        <p class="summary-item-unique">Precio total: <span class="summary-total"
                                id="summary-total"></span></p>
                        <div id="paypal-button-container"></div>
                    </div>

    </main>
    <!-- Carrito endt -->

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
    <!--Footer End -->

    <!-- Modal compra exitosa -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Compra Exitosa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¡Gracias por tu compra! Tu pedido ha sido procesado exitosamente.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal compra exitosa -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <script src="https://js.stripe.com/v3/"></script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="js/carrito.js"></script>
    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>