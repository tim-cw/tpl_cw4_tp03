<?php

// Ajoute le support pour les images à la une au thème personnalisé
add_theme_support('post-thumbnails');

// Menu
function pw_creer_menu() {
	register_nav_menu('menu_principal', 'Menu principal');
}
add_action('init', 'pw_creer_menu');

// Register Custom Post Type
function pw_games() {

	$labels = array(
		'name'                  => _x( 'Jeux', 'Post Type General Name', 'etim' ),
		'singular_name'         => _x( 'Jeu', 'Post Type Singular Name', 'etim' ),
		'menu_name'             => __( 'Jeux', 'etim' ),
		'name_admin_bar'        => __( 'Post Type', 'etim' ),
		'archives'              => __( 'Item Archives', 'etim' ),
		'attributes'            => __( 'Item Attributes', 'etim' ),
		'parent_item_colon'     => __( 'Parent Item:', 'etim' ),
		'all_items'             => __( 'Tous les jeux', 'etim' ),
		'add_new_item'          => __( 'Ajouter un jeu', 'etim' ),
		'add_new'               => __( 'Ajouter un jeu', 'etim' ),
		'new_item'              => __( 'Nouveau jeu', 'etim' ),
		'edit_item'             => __( 'Éditer le jeu', 'etim' ),
		'update_item'           => __( 'MAJ le jeu', 'etim' ),
		'view_item'             => __( 'View Item', 'etim' ),
		'view_items'            => __( 'View Items', 'etim' ),
		'search_items'          => __( 'Search Item', 'etim' ),
		'not_found'             => __( 'Not found', 'etim' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'etim' ),
		'featured_image'        => __( 'Featured Image', 'etim' ),
		'set_featured_image'    => __( 'Set featured image', 'etim' ),
		'remove_featured_image' => __( 'Remove featured image', 'etim' ),
		'use_featured_image'    => __( 'Use as featured image', 'etim' ),
		'insert_into_item'      => __( 'Insert into item', 'etim' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'etim' ),
		'items_list'            => __( 'Items list', 'etim' ),
		'items_list_navigation' => __( 'Items list navigation', 'etim' ),
		'filter_items_list'     => __( 'Filter items list', 'etim' ),
	);
	$args = array(
		'label'                 => __( 'Jeu', 'etim' ),
		'description'           => __( 'Jeux', 'etim' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-games',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'jeu', $args );

}
add_action( 'init', 'pw_games', 0 );

function pw_realisateur() {

	$labels = array(
		'name'                  => _x( 'Réalisateurs', 'Post Type General Name', 'etim' ),
		'singular_name'         => _x( 'Réalisateur', 'Post Type Singular Name', 'etim' ),
		'menu_name'             => __( 'Réalisateurs', 'etim' ),
		'name_admin_bar'        => __( 'Post Type', 'etim' ),
		'archives'              => __( 'Item Archives', 'etim' ),
		'attributes'            => __( 'Item Attributes', 'etim' ),
		'parent_item_colon'     => __( 'Parent Item:', 'etim' ),
		'all_items'             => __( 'Tous les réalisateurs', 'etim' ),
		'add_new_item'          => __( 'Ajouter un réalisateur', 'etim' ),
		'add_new'               => __( 'Ajouter un réalisateur', 'etim' ),
		'new_item'              => __( 'Nouveau réalisateur', 'etim' ),
		'edit_item'             => __( 'Éditer le réalisateur', 'etim' ),
		'update_item'           => __( 'MAJ le réalisateur', 'etim' ),
		'view_item'             => __( 'View Item', 'etim' ),
		'view_items'            => __( 'View Items', 'etim' ),
		'search_items'          => __( 'Search Item', 'etim' ),
		'not_found'             => __( 'Not found', 'etim' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'etim' ),
		'featured_image'        => __( 'Featured Image', 'etim' ),
		'set_featured_image'    => __( 'Set featured image', 'etim' ),
		'remove_featured_image' => __( 'Remove featured image', 'etim' ),
		'use_featured_image'    => __( 'Use as featured image', 'etim' ),
		'insert_into_item'      => __( 'Insert into item', 'etim' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'etim' ),
		'items_list'            => __( 'Items list', 'etim' ),
		'items_list_navigation' => __( 'Items list navigation', 'etim' ),
		'filter_items_list'     => __( 'Filter items list', 'etim' ),
	);
	$args = array(
		'label'                 => __( 'Réalisateur', 'etim' ),
		'description'           => __( 'Réalisateurs', 'etim' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'realisateur', $args );

}
add_action( 'init', 'pw_realisateur', 0 );



// PAGE OPTIONS ACF
if ( function_exists('acf_add_options_page') ) {

    // on ajoute une page d'option
    acf_add_options_page(array(
        'page_title'   => 'Options générales',
        'menu_title'   => 'Options générales',
        'menu_slug'    => 'pw-theme-options-generales',
        'capability'   => 'edit_posts',
        'redirect'     => false
    ));
}