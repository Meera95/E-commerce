<?php
if(!function_exists('h2h_setup')):
    function h2h_setup(){
        //let wordpress handle the title tag
        add_theme_support('title-tag');
    }
endif;

add_action('after_setup_theme','h2h_setup');

/* **** Register menu **** */

function register_h2h_menus(){
    register_nav_menus(
        array(
            'primary' => __('Primary Menu'),
            'footer' => __('Footer Menu')

        )

    );
}
add_action('init', 'register_h2h_menus');

/* **** Add Stylesheets **** */

function h2h_scripts(){

    //Enqueue main stylesheet
    wp_enqueue_style('h2h_styles', get_stylesheet_uri() );
    //Enqueue google fonts, Raleway
    wp_enqueue_style('h2h_google_fonts','https://fonts.googleapis.com/css?family=Raleway:300,400,4001,708');
}

add_action('wp_enqueue_scripts','h2h_scripts');


/* **** Register wiget areas **** */

function h2h_widget_init(){
    register_sidebar(array(
        'name' => __( 'Main sidebar', 'h2h' ),
        'id' => 'main-sidebar',
        'description' => __( 'widgets added here will appear in all pages using the two-column template', 'h2h'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
}

add_action( 'widgets_init', 'h2h_widget_init');

?>