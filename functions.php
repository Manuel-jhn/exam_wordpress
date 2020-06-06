<?php

  add_action('wp_enqueue_scripts', 'load_theme_assets');

  function load_theme_assets(){
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/stylesheet.css');
    wp_enqueue_script('app',get_template_directory_uri().'/js/app.js',null,null,true);
  }

  if (!function_exists( 'genres' ) ) {
  // Register Custom Taxonomy
  function genres() {
  	$labels = array(
  		'name'                       => _x( 'Genres', 'Taxonomy General Name', 'genres' ),
  		'singular_name'              => _x( 'Genre', 'Taxonomy Singular Name', 'genres' ),
  		'menu_name'                  => __( 'Genre', 'genres' ),
  		'all_items'                  => __( 'Tous les Genres', 'genres' ),
  		'parent_item'                => __( 'Parent Item', 'genres' ),
  		'parent_item_colon'          => __( 'Parent Item:', 'genres' ),
  		'new_item_name'              => __( 'Nom Nouveau Genre', 'genres' ),
  		'add_new_item'               => __( 'Ajouter Nouveau Genre', 'genres' ),
  		'edit_item'                  => __( 'Modifier Genre', 'genres' ),
  		'update_item'                => __( 'Mettre à jour Genre', 'genres' ),
  		'view_item'                  => __( 'Voir Genre', 'genres' ),
  		'separate_items_with_commas' => __( 'Séparer Genres avec des virgules', 'genres' ),
  		'add_or_remove_items'        => __( 'Ajouter ou Supprimer Genres', 'genres' ),
  		'choose_from_most_used'      => __( 'Choose from the most used', 'genres' ),
  		'popular_items'              => __( 'Genres populaires', 'genres' ),
  		'search_items'               => __( 'Chercher Genres', 'genres' ),
  		'not_found'                  => __( 'Introuvable', 'genres' ),
  		'no_terms'                   => __( 'Pas de Genres', 'genres' ),
  		'items_list'                 => __( 'Liste des Genres', 'genres' ),
  		'items_list_navigation'      => __( 'Items list navigation', 'genres' ),
  	);
  	$args = array(
  		'labels'                     => $labels,
  		'hierarchical'               => true,
  		'public'                     => true,
  		'show_ui'                    => true,
  		'show_admin_column'          => true,
  		'show_in_nav_menus'          => true,
  		'show_tagcloud'              => true,
  	);
  	register_taxonomy( 'genres', array('concerts','artistes'), $args );

  }
  add_action( 'init', 'genres', 0 );
  }

  // Register Custom Post Type
  function concerts() {

  	$labels = array(
  		'name'                  => _x( 'Concerts', 'Post Type General Name', 'concerts' ),
  		'singular_name'         => _x( 'Concert', 'Post Type Singular Name', 'concerts' ),
  		'menu_name'             => __( 'Concerts', 'concerts' ),
  		'name_admin_bar'        => __( 'Concerts', 'concerts' ),
  		'archives'              => __( 'Concerts Archives', 'concerts' ),
  		'attributes'            => __( 'Concerts attributs', 'concerts' ),
  		'parent_item_colon'     => __( 'Parent Item:', 'concerts' ),
  		'all_items'             => __( 'Tous les Concerts', 'concerts' ),
  		'add_new_item'          => __( 'Ajouter Nouveau Concert', 'concerts' ),
  		'add_new'               => __( 'Ajouter Nouveau', 'concerts' ),
  		'new_item'              => __( 'Nouveau Concert', 'concerts' ),
  		'edit_item'             => __( 'Modifier Concert', 'concerts' ),
  		'update_item'           => __( 'Mettre à jour Concert', 'concerts' ),
  		'view_item'             => __( 'Voir Concert', 'concerts' ),
  		'view_items'            => __( 'Voir Concerts', 'concerts' ),
  		'search_items'          => __( 'Chercher Concert', 'concerts' ),
  		'not_found'             => __( 'Introuvable', 'concerts' ),
  		'not_found_in_trash'    => __( 'Introuvable dans la Corbeille', 'concerts' ),
  		'featured_image'        => __( 'Image à la une', 'concerts' ),
  		'set_featured_image'    => __( 'Ajouter Image à la une', 'concerts' ),
  		'remove_featured_image' => __( 'Enlever Image à la une', 'concerts' ),
  		'use_featured_image'    => __( 'Utiliser en tant que image à la une', 'concerts' ),
  		'insert_into_item'      => __( 'Insérer dans concert', 'concerts' ),
  		'uploaded_to_this_item' => __( 'Uploaded to this item', 'concerts' ),
  		'items_list'            => __( 'Liste de concerts', 'concerts' ),
  		'items_list_navigation' => __( 'Items list navigation', 'concerts' ),
  		'filter_items_list'     => __( 'Filter items list', 'concerts' ),
  	);
  	$args = array(
  		'label'                 => __( 'Concert', 'concerts' ),
  		'description'           => __( 'Les différents concerts.', 'concerts' ),
  		'labels'                => $labels,
  		'supports'              => array( 'title', 'editor', 'thumbnail', 'concerts' ),
  		'taxonomies'            => array( 'category', 'post_tag' ),
  		'hierarchical'          => false,
  		'public'                => true,
  		'show_ui'               => true,
  		'show_in_menu'          => true,
  		'menu_position'         => 5,
  		'menu_icon'             => 'dashicons-groups',
  		'show_in_admin_bar'     => true,
  		'show_in_nav_menus'     => true,
  		'can_export'            => true,
  		'has_archive'           => true,
  		'exclude_from_search'   => false,
  		'publicly_queryable'    => true,
  		'capability_type'       => 'page',
  	);
  	register_post_type( 'concerts', $args );

  }
  add_action( 'init', 'concerts', 0 );

  // Register Custom Post Type
function artistes() {

	$labels = array(
		'name'                  => _x( 'Artistes', 'Post Type General Name', 'artistes' ),
		'singular_name'         => _x( 'Artiste', 'Post Type Singular Name', 'artistes' ),
		'menu_name'             => __( 'Artistes', 'artistes' ),
		'name_admin_bar'        => __( 'Artistes', 'artistes' ),
		'archives'              => __( 'Artistes Archives', 'artistes' ),
		'attributes'            => __( 'Artistes attributs', 'artistes' ),
		'parent_item_colon'     => __( 'Parent Item:', 'artistes' ),
		'all_items'             => __( 'Tous les Artistes', 'artistes' ),
		'add_new_item'          => __( 'Ajouter Nouveau Artiste', 'artistes' ),
		'add_new'               => __( 'Ajouter Nouveau', 'artistes' ),
		'new_item'              => __( 'Nouvel Artiste', 'artistes' ),
		'edit_item'             => __( 'Modifier Artiste', 'artistes' ),
		'update_item'           => __( 'Mettre à jour Artiste', 'artistes' ),
		'view_item'             => __( 'Voir Artiste', 'artistes' ),
		'view_items'            => __( 'Voir Artistes', 'artistes' ),
		'search_items'          => __( 'Chercher Artiste', 'artistes' ),
		'not_found'             => __( 'Introuvable', 'artistes' ),
		'not_found_in_trash'    => __( 'Introuvable dans la Corbeille', 'artistes' ),
		'featured_image'        => __( 'Image à la une', 'artistes' ),
		'set_featured_image'    => __( 'Ajouter Image à la une', 'artistes' ),
		'remove_featured_image' => __( 'Enlever Image à la une', 'artistes' ),
		'use_featured_image'    => __( 'Utiliser en tant que image à la une', 'artistes' ),
		'insert_into_item'      => __( 'Insérer dans artiste', 'artistes' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'artistes' ),
		'items_list'            => __( 'Liste des artistes', 'artistes' ),
		'items_list_navigation' => __( 'Items list navigation', 'artistes' ),
		'filter_items_list'     => __( 'Filter items list', 'artistes' ),
	);
	$args = array(
		'label'                 => __( 'Artiste', 'artistes' ),
		'description'           => __( 'Les différents artistes.', 'artistes' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'artistes', $args );

}
add_action( 'init', 'artistes', 0 );
?>
