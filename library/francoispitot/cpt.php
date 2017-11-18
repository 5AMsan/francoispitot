<?php

// Register Custom Post Type
function portfolio_post_type() {

	$labels = array(
		'name'                  => _x( 'Portfolios', 'Post Type General Name', 'foundationpress' ),
		'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'foundationpress' ),
		'menu_name'             => __( 'Portfolio', 'foundationpress' ),
		'name_admin_bar'        => __( 'Portfolio', 'foundationpress' ),
		'archives'              => __( 'Archives', 'foundationpress' ),
		'attributes'            => __( 'Attibuts', 'foundationpress' ),
		'parent_item_colon'     => __( 'Parent :', 'foundationpress' ),
		'all_items'             => __( 'Tous les portfolios', 'foundationpress' ),
		'add_new_item'          => __( 'Créer un nouveau portfolio', 'foundationpress' ),
		'add_new'               => __( 'Ajouter un portfolio', 'foundationpress' ),
		'new_item'              => __( 'Nouveau portfolio', 'foundationpress' ),
		'edit_item'             => __( 'Modifier', 'foundationpress' ),
		'update_item'           => __( 'Mettre à jour', 'foundationpress' ),
		'view_item'             => __( 'Voir', 'foundationpress' ),
		'view_items'            => __( 'Voir les archives', 'foundationpress' ),
		'search_items'          => __( 'Rechercher', 'foundationpress' ),
		'not_found'             => __( 'Not found', 'foundationpress' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'foundationpress' ),
		'featured_image'        => __( 'Image à la une', 'foundationpress' ),
		'set_featured_image'    => __( 'Choisir un image à la une', 'foundationpress' ),
		'remove_featured_image' => __( 'Supprimer l\'image à la une', 'foundationpress' ),
		'use_featured_image'    => __( 'Utiliser comme image à la une', 'foundationpress' ),
		'insert_into_item'      => __( 'Insert into item', 'foundationpress' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'foundationpress' ),
		'items_list'            => __( 'Items list', 'foundationpress' ),
		'items_list_navigation' => __( 'Items list navigation', 'foundationpress' ),
		'filter_items_list'     => __( 'Filter items list', 'foundationpress' ),
	);
	$args = array(
		'label'                 => __( 'Portfolio', 'foundationpress' ),
		'description'           => __( 'Portfolio, contient les photographies', 'foundationpress' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'comments', 'page-attributes', 'revisions', 'thumbnail'),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
    'menu_icon'             => 'dashicons-format-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'portfolio', $args );

}


// Register Custom Taxonomy
function taxonomy_projects() {

	$labels = array(
		'name'                       => _x( 'Projets', 'Taxonomy General Name', 'foundationpress' ),
		'singular_name'              => _x( 'Projet', 'Taxonomy Singular Name', 'foundationpress' ),
		'menu_name'                  => __( 'Projets', 'foundationpress' ),
		'all_items'                  => __( 'Tous les projets', 'foundationpress' ),
		'parent_item'                => __( 'Parent', 'foundationpress' ),
		'parent_item_colon'          => __( 'Parent :', 'foundationpress' ),
		'new_item_name'              => __( 'Nouveau projet', 'foundationpress' ),
		'add_new_item'               => __( 'Ajouter', 'foundationpress' ),
		'edit_item'                  => __( 'Modifier', 'foundationpress' ),
		'update_item'                => __( 'Mettre à jour', 'foundationpress' ),
		'view_item'                  => __( 'Voir', 'foundationpress' ),
		'separate_items_with_commas' => __( 'Valeurs séparées par des virgules', 'foundationpress' ),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer', 'foundationpress' ),
		'choose_from_most_used'      => __( 'Les plus utilisés', 'foundationpress' ),
		'popular_items'              => __( 'Éléments fréquents', 'foundationpress' ),
		'search_items'               => __( 'Rechercher', 'foundationpress' ),
		'not_found'                  => __( 'Rien de trouver', 'foundationpress' ),
		'no_terms'                   => __( 'Rien de trouver', 'foundationpress' ),
		'items_list'                 => __( 'Liste', 'foundationpress' ),
		'items_list_navigation'      => __( 'Liste de navigation', 'foundationpress' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'query_var'									 => 'projets',
		'rewrite'										 => array('slug'=>'projets'),
	);
	register_taxonomy( 'projects', array( 'portfolio' ), $args );

}

add_action( 'init', 'taxonomy_projects', 0 );
add_action( 'init', 'portfolio_post_type', 0 );
