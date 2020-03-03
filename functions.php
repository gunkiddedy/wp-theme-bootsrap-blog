<?php


function dedy_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.1', 'all');

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'slim', get_template_directory_uri() . '/js/slim.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script( 'offcanvas', get_template_directory_uri() . '/js/offcanvas.js', '', 1.1, true);
    // wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', '', 1.1, true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'dedy_theme_scripts' );

add_theme_support( 'post-thumbnails' );

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Setiawan Sidebar' ),
            'description'   => __( 'show your sidebar.' ),
            'before_widget' => '<div class="card mb-3 card-sidebar">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="card-header">',
            'after_title'   => '</div>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}

// count comment per post
function comment_per_post(){
    $args = array(
        'post_id' => get_the_ID( ),   // Use post_id, not post_ID
        'count'   => true // Return only the count
    );
    $comments_count = get_comments( $args );
    return $comments_count;
}

// Customize Comment Output
/**
 * Load Custom Comments Layout file.
 */
require get_template_directory() . '/inc/comments-helper.php';


// search form
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );


// uncomment this function if you want custom image size for your theme
// function setup_image_size() {
//     set_post_thumbnail_size( 300, 300, true );
// }
// add_action( 'after_setup_theme', 'setup_image_size' );