(function ($) {
    "use strict";
    
    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });
    

    // Date and time picker
    $('.date').datetimepicker({
        format: 'L'
    });
    $('.time').datetimepicker({
        format: 'LT'
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        margin: 30,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    
})(jQuery);

const products = [
    { id: 1, name: 'Producto 1', price: 10, image: 'https://via.placeholder.com/150' },
    { id: 2, name: 'Producto 2', price: 15, image: 'https://via.placeholder.com/150' },
    { id: 3, name: 'Producto 3', price: 20, image: 'https://via.placeholder.com/150' },
    // Agrega más productos aquí
];

// Inicialización del buscador y el carrito de compras
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('search');
    const productsContainer = document.getElementById('products');
    const cartItemsContainer = document.getElementById('cart-items');
    const totalPriceElement = document.getElementById('total-price');
    
    let cart = [];

    // Función para mostrar los productos
    function displayProducts(productsToDisplay) {
        productsContainer.innerHTML = '';
        productsToDisplay.forEach(product => {
            const productElement = document.createElement('div');
            productElement.className = 'product';
            productElement.innerHTML = `
                <img src="${product.image}" alt="${product.name}">
                <h3>${product.name}</h3>
                <p>${product.price}€</p>
                <button onclick="addToCart(${product.id})">Agregar al Carrito</button>
            `;
            productsContainer.appendChild(productElement);
        });
    }

    // Función para agregar productos al carrito
    function addToCart(productId) {
        const product = products.find(p => p.id === productId);
        cart.push(product);
        updateCart();
    }

    // Función para actualizar el carrito de compras
    function updateCart() {
        cartItemsContainer.innerHTML = '';
        let totalPrice = 0;
        cart.forEach(item => {
            const cartItem = document.createElement('li');
            cartItem.textContent = `${item.name} - ${item.price}€`;
            cartItemsContainer.appendChild(cartItem);
            totalPrice += item.price;
        });
        totalPriceElement.textContent = totalPrice.toFixed(2);
    }

    // Función para filtrar productos según el término de búsqueda
    function filterProducts() {
        const searchTerm = searchInput.value.toLowerCase();
        const filteredProducts = products.filter(product =>
            product.name.toLowerCase().includes(searchTerm)
        );
        displayProducts(filteredProducts);
    }

    // Escuchar eventos en el input de búsqueda
    searchInput.addEventListener('input', filterProducts);

    // Mostrar todos los productos al cargar la página
    displayProducts(products);
});

// Añadir función addToCart al objeto window para que esté disponible en el contexto global
window.addToCart = function(productId) {
    const product = products.find(p => p.id === productId);
    cart.push(product);
    updateCart();
};