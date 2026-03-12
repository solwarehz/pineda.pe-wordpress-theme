
<?php
/*
* Template Name: Listado de clases
* Template Post Type: page
*/
    get_header();
?>
<main class="contenedor seccion">
    <?php
        while( have_posts() ) : the_post();
            the_title('<h1 class="text-center text-primary">','</h1>');

            if (has_post_thumbnail()) {
                the_post_thumbnail('full', array('class' => 'imgagen-destacada') );
            }

            the_content();            
        endwhile;
    ?>


    <ul class="listado-grid">
        <?php
            $args = array(
                'post_type' => 'pineda_clases',
                'posts_per_page' => -1
            );

            $clases = new WP_Query($args);

            while($clases->have_posts()) {
                $clases->the_post();
        ?>

        <li class="card">
            <?php
                if(has_post_thumbnail()) {
                    the_post_thumbnail();
                } 
            ?>

            <div class="contenido">
                <a href="<?php the_permalink(); ?> ">
                    <h3> <?php the_title(); ?> </h3>
                </a>
                <?php 
                    $hora_inicio = get_field('hora_inicio');
                    $hora_fin = get_field('hora_fin');
                ?>
                <p> <?php echo get_field('dias_clase'); ?> de <?php echo $hora_inicio; ?> a <?php echo $hora_fin; ?> </p>
            </div>
        </li>
        <?php } wp_reset_postdata(); ?>

    </ul>
</main>

<?php
    get_footer();
?>
