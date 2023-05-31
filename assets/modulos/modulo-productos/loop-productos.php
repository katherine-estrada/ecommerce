<script>
function incrustar_hoja_estilos_comision() {
    var hoja_estilos_url =
        '<?php echo get_site_url() . '/wp-content/themes/netflix/assets/modulos/modulo-productos/modulo-producto.css';?>';
    var hoja_estilos = document.createElement('link');
    hoja_estilos.rel = 'stylesheet';
    hoja_estilos.href = hoja_estilos_url;
    document.head.appendChild(hoja_estilos);
}
incrustar_hoja_estilos_comision();
</script>

<!-- #seccion -->
<section class="row d-flex ">
    <?php $active = true;
            $temp = $wp_query;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $post_per_page = -1; // -1 shows all posts la cantidad de portadas que se verán
            $args = array(
                'post_type' => 'product',
                'orderby' => 'date',
                'order' => 'ASC',
                'paged' => $paged,
                'posts_per_page' => $post_per_page,
                // Aquí se registra la catergoría
                // 'tax_query'=> array (
                //     array (
                //         'taxonomy'=>'categoria-serie',
                //         'field'=>'slug',
                //         'terms'=>'coreana',
                //     ),
                // ),

                
            );
            $wp_query = new WP_Query($args);
    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

    
  <div class="col-4">
    <div><?php ecommerce_post_thumbnail(); ?></div>
    <h2><?php echo get_the_title();  ?></h2> 
    <a href="<?php the_permalink (); ?>">ver más</a>
  </div>


    <?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>
</section>

<!------seccion contacto---->