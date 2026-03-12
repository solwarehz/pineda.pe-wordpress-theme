<footer class="footer">
    <hr>
    <div class="contenedor contenido-footer">
        
            <?php
                    $args = array(
                        'theme_location' => 'menu-principal',
                        'container' => 'nav',
                        'container_class' => 'menu-principal',
                        'fallback_cb'     => false
                    );

                    wp_nav_menu( $args );
            ?>
            <p class="copyright">
                @Todos los derechos reservados <?php echo get_bloginfo('name') . ' ' . date('Y'); ?>
            </p>
       
    </div>
</footer>
    <?php wp_footer(); ?>
</body>
</html>

