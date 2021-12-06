<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<?php

// Setup Theme
function tpa_setup() {
    load_theme_textdomain( 'tpa' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus(
		array(
			'mobile'    	=> __( 'Mobilemenü', 'tpa' ),
			'main' => __( 'Hauptmenü', 'tpa' ),
			'footer'  	=> __( 'Footermenü', 'tpa' ),
		)
    );
    
    add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
    );
    
    add_theme_support(
		'post-formats',
		array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'audio',
		)
	);
	    
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'tpa_setup' );

// Enqueue Scripts
function tpa_scripts() {
  	wp_enqueue_style( 'theme-css', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'tpa_scripts' );

// Dequeue jQuery
wp_deregister_script('jquery');

// Dequeue jQuery Migrate
function dequeue_jquery_migrate( $scripts ) {
    if ( ! is_admin() && ! empty( $scripts->registered['jquery'] ) ) {
        $scripts->registered['jquery']->deps = array_diff(
            $scripts->registered['jquery']->deps,
            [ 'jquery-migrate' ]
        );
    }
}
add_action( 'wp_default_scripts', 'dequeue_jquery_migrate' );

// Add Image Sizes
add_image_size( 'img-featured-angebote', 610, 9999);
add_image_size( 'banner', 1920, 9999);
add_image_size( 'square', 500, 500, true);

// Register Custom Post Type "Angebote"
function angebote() {

	$labels = array(
		'name'                  => _x( 'Angebote', 'Post Type General Name', 'tpa' ),
		'singular_name'         => _x( 'Angebot', 'Post Type Singular Name', 'tpa' ),
		'menu_name'             => __( 'Angebote', 'tpa' ),
		'name_admin_bar'        => __( 'Angebote', 'tpa' ),
		'archives'              => __( 'Angebotsarchiv', 'tpa' ),
		'attributes'            => __( 'Angebot Attribute', 'tpa' ),
		'parent_item_colon'     => __( 'Elternangebot:', 'tpa' ),
		'all_items'             => __( 'Alle Angebote', 'tpa' ),
		'add_new_item'          => __( 'Neues Angebot', 'tpa' ),
		'add_new'               => __( 'Neues Angebot', 'tpa' ),
		'new_item'              => __( 'Neues Angebot', 'tpa' ),
		'edit_item'             => __( 'Angebot bearbeiten', 'tpa' ),
		'update_item'           => __( 'Angebot aktualisieren', 'tpa' ),
		'view_item'             => __( 'Angebot ansehen', 'tpa' ),
		'view_items'            => __( 'Angebote ansehen', 'tpa' ),
		'search_items'          => __( 'Angebot suchen', 'tpa' ),
		'not_found'             => __( 'Nicht gefunden', 'tpa' ),
		'not_found_in_trash'    => __( 'Im Papierkorb nichts gefunden', 'tpa' ),
		'featured_image'        => __( 'Featured Image', 'tpa' ),
		'set_featured_image'    => __( 'Set featured image', 'tpa' ),
		'remove_featured_image' => __( 'Remove featured image', 'tpa' ),
		'use_featured_image'    => __( 'Use as featured image', 'tpa' ),
		'insert_into_item'      => __( 'Insert into item', 'tpa' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'tpa' ),
		'items_list'            => __( 'Items list', 'tpa' ),
		'items_list_navigation' => __( 'Items list navigation', 'tpa' ),
		'filter_items_list'     => __( 'Filter items list', 'tpa' ),
	);
	$args = array(
		'label'                 => __( 'Angebot', 'tpa' ),
		'description'           => __( 'Reiseangebote', 'tpa' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-airplane',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Angebote', $args );

}
add_action( 'init', 'angebote', 0 );

// Register Custom Post Type "Feedback"
function feedback() {

	$labels = array(
		'name'                  => _x( 'Feedback', 'Post Type General Name', 'tpa' ),
		'singular_name'         => _x( 'Feedback', 'Post Type Singular Name', 'tpa' ),
		'menu_name'             => __( 'Feedback', 'tpa' ),
		'name_admin_bar'        => __( 'Feedback', 'tpa' ),
		'archives'              => __( 'Feedbackarchiv', 'tpa' ),
		'attributes'            => __( 'Feedback Attribute', 'tpa' ),
		'parent_item_colon'     => __( 'Elternfeedback:', 'tpa' ),
		'all_items'             => __( 'Alle Feedbacks', 'tpa' ),
		'add_new_item'          => __( 'Neues Feedback', 'tpa' ),
		'add_new'               => __( 'Neues Feedback', 'tpa' ),
		'new_item'              => __( 'Neues Feedback', 'tpa' ),
		'edit_item'             => __( 'Feedback bearbeiten', 'tpa' ),
		'update_item'           => __( 'Feedback aktualisieren', 'tpa' ),
		'view_item'             => __( 'Feedback ansehen', 'tpa' ),
		'view_items'            => __( 'Feedback ansehen', 'tpa' ),
		'search_items'          => __( 'Feedback suchen', 'tpa' ),
		'not_found'             => __( 'Nicht gefunden', 'tpa' ),
		'not_found_in_trash'    => __( 'Im Papierkorb nichts gefunden', 'tpa' ),
		'featured_image'        => __( 'Featured Image', 'tpa' ),
		'set_featured_image'    => __( 'Set featured image', 'tpa' ),
		'remove_featured_image' => __( 'Remove featured image', 'tpa' ),
		'use_featured_image'    => __( 'Use as featured image', 'tpa' ),
		'insert_into_item'      => __( 'Insert into item', 'tpa' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'tpa' ),
		'items_list'            => __( 'Items list', 'tpa' ),
		'items_list_navigation' => __( 'Items list navigation', 'tpa' ),
		'filter_items_list'     => __( 'Filter items list', 'tpa' ),
	);
	$args = array(
		'label'                 => __( 'Feedback', 'tpa' ),
		'description'           => __( 'Kundenfeedback', 'tpa' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-awards',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Feedback', $args );

}
add_action( 'init', 'feedback', 0 );