<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// Videos
		$labels = array(
			'name'          => 'Videos',
			'singular_name' => 'Video',
			'add_new'       => 'Nueva Video',
			'add_new_item'  => 'Nueva Video',
			'edit_item'     => 'Editar Video',
			'new_item'      => 'Nueva Video',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Video',
			'search_items'  => 'Buscar Video',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Videos'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'videos' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'video', $args );
		
		// Podcasts
		$labels = array(
			'name'          => 'Podcasts',
			'singular_name' => 'Podcast',
			'add_new'       => 'Nueva Podcast',
			'add_new_item'  => 'Nueva Podcast',
			'edit_item'     => 'Editar Podcast',
			'new_item'      => 'Nueva Podcast',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Podcast',
			'search_items'  => 'Buscar Podcast',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Podcasts'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'podcasts' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'podcast', $args );

	});