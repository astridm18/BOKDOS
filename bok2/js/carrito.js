// Vaciar el carrito en el localStorage
function reiniciarCarrito() {
    localStorage.removeItem('carrito'); //esta linea remueve la tabla carrito del localstorage, por ende, lo vacia, CLARO, por eso cuando se coloco en crear orden iniciaba la pagina sin productos
    console.log('El carrito ha sido reiniciado.');
}

const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    console.log(carrito);
        // Mostrar la cantidad de productos en el span

        // Calcular totalPrecio
        let totalPrecio = carrito.reduce((sum, producto) => sum + parseFloat(producto.precio.replace('$', '')), 0);

        // Configurar los botones de PayPal después de calcular totalPrecio
        paypal.Buttons({
            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: totalPrecio.toFixed(2), // Usar totalPrecio
                        },
                    }],
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                reiniciarCarrito()
                // window.location.reload()
                return actions.order.capture().then(async function(details) {
                    // Show a success message to the buyer
                    Swal.fire({
                        title: 'Compra Exitosa',
                        text: `¡Gracias por tu compra ${details.payer.name.given_name} ! Tu pedido ha sido procesado exitosamente.`,
                        icon: 'success',
                        confirmButtonText: 'Cerrar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Recargar la página después de cerrar la alerta
                            window.location.reload();
                        }
                    });
                });
            },
            style: {
                color: 'blue',
                shape: 'pill'
            }
        }).render('#paypal-button-container');
console.log(totalPrecio);
document.addEventListener('DOMContentLoaded', function() {
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

                var deleteButton = document.createElement('button');
                deleteButton.classList.add('delete-btn-unique');
                deleteButton.textContent = 'Eliminar';
                // Añadir evento de clic al botón de eliminar
                deleteButton.addEventListener('click', function() {
                    var index = (paginaActual - 1) * productosPorPagina + Array.from(
                        cartItems.children).indexOf(this.parentNode);
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
            pageButton.classList.add('pag-buttons')
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
        precioTotalCarrito.textContent =
            `$${carrito.reduce((sum, producto) => sum + parseFloat(producto.precio.replace('$', '')), 0).toFixed(2)}`;
        totalPaginas = Math.ceil(carrito.length / productosPorPagina);
        mostrarPagina(paginaActual);
        actualizarPaginacion();
        localStorage.setItem('carrito', JSON.stringify(carrito));

    }
   

   
    // Inicializar el carrito
    actualizarCarrito();

});