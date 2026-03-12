<?php
    while( have_posts() ) : the_post();
        the_title('<h1 class="text-center text-primary">','</h1>');

        if (has_post_thumbnail()) {
            the_post_thumbnail('full', array('class' => 'imgagen-destacada') );
        }
            
            $hora_inicio = get_field('hora_inicio');
            $hora_fin = get_field('hora_fin');
            ?>
            <p class="informacion-clase"> 
                <?php echo get_field('dias_clase'); ?> de 
                <?php echo $hora_inicio; ?> a <?php echo $hora_fin; ?> 
            </p>
            <?php
        
        the_content();            
    endwhile;
?>