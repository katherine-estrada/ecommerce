<?php
/*assets scripts*/

function spotify_script()
{
    // nos aseguramos que no estamos en el area de administracion
    if (!is_admin()) {
    
    wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', true);
    wp_register_script('mis-scripts', get_bloginfo('template_directory') . '/assets/librerias/js/mis-scripts.js', array('jquery'), '1', true); 
        
    /*encolamos los JS*/
    wp_enqueue_script('mis-scripts', array('jquery'), true);
    wp_enqueue_script('bootstrap-js');

    }
}
add_action("wp_enqueue_scripts", "spotify_script", 1);
