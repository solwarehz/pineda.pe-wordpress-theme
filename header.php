<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo_pineda_negro.png " alt="Logotipo jose pineda">
            </div>
            <nav>
                <!-- Nav aqui -->
                
                <?php
                    $args = array(
                        'theme_location' => 'menu-principal',
                        'container' => 'nav',
                        'container_class' => 'menu-principal',
                        'fallback_cb'     => false
                    );

                    wp_nav_menu( $args );
                ?>
            </nav>
        </div>
    </header>