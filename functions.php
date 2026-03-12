<?php

   function pineda_setup() {

      // Includes
      require get_template_directory() . '/includes/widgets.php';
      
      // Imagenes destacadas
      add_theme_support( 'post-thumbnails' );
      
      // Titulos para SEO
      add_theme_support( 'title-tag' );
   }
   add_action( 'after_setup_theme', 'pineda_setup' );

   function pineda_menus() {
      register_nav_menus( array(
         'menu-principal' => __( 'Menu Principal', 'pineda.pe' )
      ) );
   }
   add_action( 'init', 'pineda_menus' );

   function pineda_scripts_styles() {
      // Agregar CSS
      wp_enqueue_style( 'pineda-styles', get_stylesheet_uri(), array('normalize'), '1.0.0' );
      wp_enqueue_style( 'normalize', get_stylesheet_uri('https://necolas.github.io/normalize.css/8.0.1/normalize.css'), array('lightboxcss'),'8.0.1');
      wp_enqueue_style( 'lightboxcss', get_template_directory_uri() . '/css/lightbox.css', array(),'2.12.0');
      
      // Archivos JS
      wp_enqueue_script( 'lightboxjs', get_template_directory_uri() . '/js/lightbox.js', array(), '2.12.0', true );
      wp_enqueue_script( 'jquery');


      // Agregar scripts
      // wp_enqueue_script( 'pineda-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
   }
   add_action('wp_enqueue_scripts', 'pineda_scripts_styles');
   
   // Definir zona de widgets
   function pineda_widgets() {
      register_sidebar( array(
         'name' => __( 'Sidebar Principal', 'pineda.pe' ),
         'id' => 'sidebar-principal',
         'description' => __( 'Zona de widgets para el sidebar principal', 'pineda.pe' ),
         'before_widget' => '<div class="widget">',
         'after_widget' => '</div>',
         'before_title' => '<h3 class="text-center text-primary">',
         'after_title' => '</h3>',
      ) );

       register_sidebar( array(
         'name' => __( 'Sidebar Clases', 'pineda.pe' ),
         'id' => 'sidebar-clases',
         'description' => __( 'Zona de widgets para el sidebar de clases', 'pineda.pe' ),
         'before_widget' => '<div class="widget">',
         'after_widget' => '</div>',
         'before_title' => '<h3 class="text-center text-primary">',
         'after_title' => '</h3>',
      ) );
   }
   add_action( 'widgets_init', 'pineda_widgets' );
?>