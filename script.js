$(document).ready(function() {

    // Función para animar elementos cuando aparecen en pantalla
    function revealOnScroll() {
        var scrolled = $(window).scrollTop();
        
        // Itera sobre cada fila de servicio
        $(".service-row").each(function() {
            var elementTop = $(this).offset().top;
            var windowHeight = $(window).height();

            // Si el elemento está en el viewport (con un pequeño offset)
            if (elementTop < scrolled + windowHeight - 100) {
                $(this).addClass("visible");
            }
        });
    }

    // Ejecuta la función al cargar la página y al hacer scroll
    $(window).on("scroll", revealOnScroll);
    revealOnScroll(); // Llama una vez al cargar por si hay elementos visibles

});