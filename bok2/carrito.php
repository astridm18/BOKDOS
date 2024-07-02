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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="carrito.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Monoton&display=swap');
   
   </style>
<body>
  
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
        <a href="index.php" class="nav-item nav-link">Inicio</a>
        <a href="about.php" class="nav-item nav-link">Acerca</a>
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
    <div id="gotas" class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 300px">
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
                    <h2 class="cart-title-unique">Carrito (<span class="total-items" id="total-items">2</span> artículos)</h2>
                    <div class="cart-items-unique">
                    
                    </div>
            
                    <div class="empty-cart-message">
                        No hay productos en el carrito.
                    </div>
                    <div class="pagination">
                        <!-- Botones de paginación -->
                    </div>
                    
                </div>
    
                <div class="cart-right-unique">
                    <div class="summary-unique">
                        <h3 class="summary-title-unique">Resumen de la Compra</h3>
                        <p class="summary-item-unique">Cantidad de artículos: <span class="summary-items" id="summary-items"></span></p>
                        <p class="summary-item-unique">Precio total: <span class="summary-total" id="summary-total"></span></p>
                        <button href="paypal.php" class="checkout-btn-unique">Comprar</button>
                    </div>
                </div>
            </div>
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
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://www.instagram.com/bokdos_1?igsh=MWczeTN1eXA3d3pu&utm_source=qr"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://wa.link/ety2lt"><i class="fab fa-whatsapp"></i></a>
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
            <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="#">BOKDOS</a>. Todos los derechos reservados.</a></p>
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
    <script>
        
        document.addEventListener('DOMContentLoaded', function () {
            var cartItems = document.querySelector('.cart-items-unique');
            var emptyCartMessage = document.querySelector('.empty-cart-message');
            var carTotalAmount = document.querySelector('.total-items');
            var resumenTotalAumount = document.querySelector('.summary-items');
            var precioTotalCarrito = document.querySelector('.summary-total');
            var paginationContainer = document.querySelector('.pagination');
            var carrito = JSON.parse(localStorage.getItem('carrito')) || []; 

    var productosPorPagina = 3;
    var paginaActual = 1;
    var totalPaginas = Math.ceil(carrito.length / productosPorPagina);

    function mostrarPagina(pagina) {
        // Limpiar el contenido actual del DOM
        cartItems.innerHTML = '';

        var inicio = (pagina - 1) * productosPorPagina;
        var fin = inicio + productosPorPagina;
        var productosPagina = carrito.slice(inicio, fin);

        if (productosPagina.length > 0) {
            cartItems.style.display = 'block';
            emptyCartMessage.style.display = 'none';

            productosPagina.forEach(function(producto, index) {
                var productCard = document.createElement('div');
                productCard.classList.add('cart-item-unique');

                var productImage = document.createElement('img');
                productImage.src = producto.imagen;
                productImage.alt = producto.nombre;
                productImage.classList.add('item-image-unique');

                var productDetails = document.createElement('div');
                productDetails.classList.add('item-details-unique');

                var productName = document.createElement('h3');
                productName.classList.add('item-title-unique');
                productName.textContent = producto.nombre;

                var productDescription = document.createElement('p');
                productDescription.classList.add('item-description-unique');
                productDescription.textContent = producto.descripcion;

                var productPrice = document.createElement('span');
                productPrice.classList.add('item-price-unique');
                productPrice.textContent = producto.precio + ' $';

                productDetails.appendChild(productName);
                productDetails.appendChild(productDescription);
                productDetails.appendChild(productPrice);

                var productActions = document.createElement('div');
                productActions.classList.add('item-actions-unique');

                var productQuantity = document.createElement('input');
                productQuantity.type = 'number';
                productQuantity.value = 1;
                productQuantity.min = 1;
                productQuantity.classList.add('item-quantity-unique');
                productQuantity.dataset.index = inicio + index; // Agregar índice de producto global
                productQuantity.addEventListener('change', actualizarTotales);
                productActions.appendChild(productQuantity);

                var deleteButton = document.createElement('button');
                deleteButton.classList.add('delete-btn-unique');
                deleteButton.textContent = 'Eliminar';
                // Añadir evento de clic al botón de eliminar
                deleteButton.addEventListener('click', function() {
                    var index = (paginaActual - 1) * productosPorPagina + Array.from(cartItems.children).indexOf(this.parentNode);
                    carrito.splice(index, 1); // Eliminar el producto del array
                     actualizarCarrito(); // Actualizar el DOM y el localStorage
});

                productActions.appendChild(deleteButton);

                productCard.appendChild(productImage);
                productCard.appendChild(productDetails);
                productCard.appendChild(productActions);

                cartItems.appendChild(productCard);
            });
        } else {
            cartItems.style.display = 'none';
            emptyCartMessage.style.display = 'block';
        }
    }

    function actualizarTotales() {
        var totalCantidad = 0;
        var totalPrecio = 0;

        document.querySelectorAll('.item-quantity-unique').forEach(function(input) {
            var cantidad = parseInt(input.value);
            var index = parseInt(input.dataset.index); // Obtener índice de producto global
            var precio = parseFloat(carrito[index].precio.replace('$', ''));
            totalCantidad += carrito.length + cantidad;
            totalPrecio += cantidad * precio;
        });

        carTotalAmount.textContent = totalCantidad;
        resumenTotalAumount.textContent = totalCantidad;
        precioTotalCarrito.textContent = `$${totalPrecio.toFixed(2)}`;
    }

    function actualizarPaginacion() {
        paginationContainer.innerHTML = '';

        for (let i = 1; i <= totalPaginas; i++) {
            let pageButton = document.createElement('button');
            pageButton.textContent = i;
            if (i === paginaActual) {
                pageButton.disabled = true;
            }
            pageButton.addEventListener('click', function() {
                paginaActual = i;
                mostrarPagina(paginaActual);
                actualizarPaginacion();
            });
            paginationContainer.appendChild(pageButton);
        }
    }

    function actualizarCarrito() {
        carTotalAmount.textContent = carrito.length;
        resumenTotalAumount.textContent = carrito.length;
        precioTotalCarrito.textContent = `$${carrito.reduce((sum, producto) => sum + parseFloat(producto.precio.replace('$', '')), 0).toFixed(2)}`;
        totalPaginas = Math.ceil(carrito.length / productosPorPagina);
        mostrarPagina(paginaActual);
        actualizarPaginacion();
        localStorage.setItem('carrito', JSON.stringify(carrito));
    }

    function reiniciarCarrito() {
      // Vaciar el carrito en el localStorage
      localStorage.removeItem('carrito');
      console.log('El carrito ha sido reiniciado.');
    }
    // Inicializar el carrito
    actualizarCarrito();
  
});
    </script>
 

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>