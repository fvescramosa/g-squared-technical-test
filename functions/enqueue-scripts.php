<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    wp_enqueue_style( 'moby', get_template_directory_uri() . '/assets/third-party/moby2.0.7/moby.min.css', array(), filemtime(get_template_directory() . '/assets/third-party/moby2.0.7'), 'all' );

    wp_enqueue_script( 'moby', get_template_directory_uri() . '/assets/third-party/moby2.0.7/moby.min.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/third-party/moby2.0.7'), true );

    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/scripts/scripts.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts/js'), true );
   
    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/styles/style.css', array(), filemtime(get_template_directory() . '/assets/styles/scss'), 'all' );
    wp_enqueue_style( 'foundation-icons-css', get_template_directory_uri() . '/assets/third-party/foundation-icons/foundation-icons.css', array(), filemtime(get_template_directory() . '/assets/styles/scss'), 'all' );
    wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/third-party/fontawesome-free/css/all.css', '', '', '' );


    add_action( 'admin_enqueue_scripts', 'font_awesome_admin');
    function font_awesome_admin() {
        wp_enqueue_style( 'admin-font-awesome-css', get_template_directory_uri() . '/assets/third-party/fontawesome-free/css/all.css', '', '', '' );
    }


    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);