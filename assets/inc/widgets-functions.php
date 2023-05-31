<?php

function example_theme_support(){
    remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme','example_theme_support');

/*widget assets*/
function zona_widget(){
    
    //widget 1
register_sidebar(array(
    'name'=> 'footer columna 1',
    'id'=> 'footer_uno',
    'before_widget'=> '<div id="%1$s" class="col-12 col-lg-4 m-2 m-lg-0">',
    'after_widget'=> '</div>',
    'before_title'=> '<h5 class="titulo-menu-footer">',
    'after_title'=> '</h5>'
));
//widget 1
//widget 2
register_sidebar(array(
    'name'=> 'footer columna 2',
    'id'=> 'footer_dos',
    'before_widget'=> '<div id="%1$s" class="col-12 col-lg-4 m-2 m-lg-0">',
    'after_widget'=> '</div>',
    'before_title'=> '<h5 class="titulo-menu-footer">',
    'after_title'=> '</h5>'
));
//widget 2

//widget 3
register_sidebar(array(
    'name'=> 'footer columna 3',
    'id'=> 'footer_tres',
    'before_widget'=> '<div id="%1$s" class="col-12 col-lg-4 m-2 m-lg-0">',
    'after_widget'=> '</div>',
    'before_title'=> '<h5 class="titulo-menu-footer">',
    'after_title'=> '</h5>'
));
//widget 3


//widget 4
register_sidebar(array(
    'name'=> 'footer columna 4',
    'id'=> 'footer_cuatro',
    'before_widget'=> '<div id="%1$s" class="col-12 col-lg-4 m-2 m-lg-0">',
    'after_widget'=> '</div>',
    'before_title'=> '<h5 class="titulo-menu-footer">',
    'after_title'=> '</h5>'
));
//widget 4
}

add_action('widgets_init','zona_widget');
/*widget assets*/