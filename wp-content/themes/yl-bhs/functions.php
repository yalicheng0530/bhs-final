<?php
function theme_styles() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/node_modules/normalize.css/normalize.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');

    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery', 'bootstrap_js'), '', true );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function theme_js() {
    global $wp_scripts;

    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'theme_js' );

/*============================
=            MENU            =
============================*/

function register_theme_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' )
      )
    );
}
add_action( 'init', 'register_theme_menus' );

/*===============================
=            Widgets            =
===============================*/

function create_widget($name, $id, $description) {
    register_sidebar(array(
      'name' => __( $name ),
      'id'   => $id,
      'description' => __( $description ),
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));
}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the hompage');
create_widget( 'Front Page Center', 'front-center', 'Displays on the center of the hompage');
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the hompage');

/* SIDE BAR WIDGET */
create_widget( 'Page Sidebar', 'page', 'Displays on side of pages with sidebar');
/* BLOG SIDE BAR WIDGET */
create_widget( 'Blog Sidebar', 'blog', 'Displays on side of pages in blog section');


?>
