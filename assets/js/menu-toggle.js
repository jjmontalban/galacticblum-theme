jQuery(document).ready(function($) {
    // Selector para el icono de hamburguesa
    var $menuToggle = $('.menu-toggle');
    // Selector para el menú móvil
    var $mobileMenu = $('.mobile-menu');

    // Escucha el clic en el icono de hamburguesa
    $menuToggle.click(function() {
        // Alternar la clase "active" en el icono de hamburguesa
        $(this).toggleClass('active');
        // Alternar la visibilidad del menú móvil
        $mobileMenu.toggle();
    });
});
