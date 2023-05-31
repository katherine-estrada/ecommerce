<?php
function ccs_spotify(){
    
    
    
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', 'all');
    wp_register_style('estilos', get_template_directory_uri() . '/assets/librerias/css/estilos.css', 'all');
    wp_register_style('iconos', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css', 'all');
    wp_register_style('font', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', 'all');


   

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('estilos');
    wp_enqueue_style('iconos');
    wp_enqueue_style('font');
    
  
}


add_action('wp_enqueue_scripts', 'ccs_spotify');
