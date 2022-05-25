<?php
function sgi_enqueue_styles() {
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");

    wp_enqueue_style("sgi-style", get_stylesheet_uri());

    wp_enqueue_script("jquery", get_stylesheet_directory_uri() . "/js/jquery-1.12.4.min.js", array(), false, true);
    wp_enqueue_script("jquery-popper", get_stylesheet_directory_uri() . "/js/popper.min.js", array(), false, true);
    wp_enqueue_script("bootstrap", get_stylesheet_directory_uri() . "/js/bootstrap.min.js", array(), false, true);
    wp_enqueue_script("ionicons", "https://unpkg.com/ionicons@5.0.0/dist/ionicons.js", array(), false, true);
    wp_enqueue_script("jarallax", get_stylesheet_directory_uri() . "/js/jarallax.min.js", array(), false, true);
    wp_enqueue_script("ajaxchimp", get_stylesheet_directory_uri() . "/js/jquery.ajaxchimp.min.js", array(), false, true);
    wp_enqueue_script("validate", get_stylesheet_directory_uri() . "/js/jquery.validate.min.js", array(), false, true);


    wp_enqueue_script("jquery-magnific", get_stylesheet_directory_uri() . "/js/jquery.magnific-popup.min.js", array(), false, true);
    wp_enqueue_script("aos", get_stylesheet_directory_uri() . "/js/aos.js", array(), false, true);
    wp_enqueue_script("owl", get_stylesheet_directory_uri() . "/js/owl.carousel.min.js", array(), false, true);
    wp_enqueue_script("interface", get_stylesheet_directory_uri() . "/js/interface.js", array(), false, true);
}
add_action("wp_enqueue_scripts", "sgi_enqueue_styles");
?>
<?php
function ti_custom_javascript() {
    ?>
        <script>
          // your javscript code goes here
        </script>
    <?php
}
add_action('wp_head', 'ti_custom_javascript');