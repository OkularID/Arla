<?php
add_filter( 'show_admin_bar', '__return_false' );

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

// remove contact form 7 url response
add_filter('wpcf7_form_action_url', 'remove_unit_tag');

function remove_unit_tag($url){
    $remove_unit_tag = explode('#',$url);
    $new_url = $remove_unit_tag[0];
    return $new_url;
}
// end remove contact form 7 url response

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
function custom_scripts() {
    wp_register_script( 'jquery-js', get_stylesheet_directory_uri() . '/node_modules/jquery/dist/jquery.min.js');

	wp_register_script( 'owl.js', get_stylesheet_directory_uri() . '/node_modules/owl.carousel/dist/owl.carousel.min.js');

    wp_register_script( 'bootstrap.js',get_stylesheet_directory_uri().'/node_modules/bootstrap/dist/js/bootstrap.min.js');
    wp_register_script( 'carousel-swipe.js',get_stylesheet_directory_uri().'/node_modules/bootstrap-carousel-swipe/carousel-swipe.js');

    wp_register_script( 'app.js',get_stylesheet_directory_uri().'/scripts/app.js');
    wp_register_script( 'jquery.mobile.custom.min.js',get_stylesheet_directory_uri().'/scripts/jquery.mobile.custom.min.js');


    if (!is_admin()) {
    	wp_enqueue_script('jquery-js');
    	wp_enqueue_script('owl.js','','','',true);
        wp_enqueue_script('bootstrap.js','','','',true);
        wp_enqueue_script('moment.js','','','',true);
        wp_enqueue_script('app.js','','','',true);
    }
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

add_action( 'after_setup_theme', 'theme_functions' );
function theme_functions() {

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'menus' );
    register_nav_menus(
        array(
        'header-left-side' => __( 'Header left' ),
        'header-menu-category' => __( 'By category' ),
        'header-menu-style' => __( 'By style' ),
        'header-right-side' => __( 'Header right' ),
        'footer-left-side' => __( 'Footer left' ),
        'footer-right-side' => __( 'Footer right' ),

        )
    );
}

function my_nav_wrap() {
    $wrap  = '<ul id="%1$s" class="%2$s">';
    $wrap .= '%3$s';
    $wrap .= '</ul>';
    return $wrap;
}

function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
    register_nav_menu('my-custom-menu2',__( 'My Custom Menu2' ));
    register_nav_menus(
      array(
        'my-custom-menu' => __( 'My Custom Menu' ),
        'extra-menu' => __( 'Extra Menu' )
      )
    );
    register_nav_menus(
      array(
        'my-custom-menu2' => __( 'My Custom Menu2' ),
        'extra-menu' => __( 'Extra Menu' )
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu' );
