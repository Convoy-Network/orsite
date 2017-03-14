<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////


	add_action('init', function(){


		if( ! get_page_by_path('landing') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Landing page',
				'post_name'   => 'landing',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		if( ! get_page_by_path('contact') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Contacto',
				'post_name'   => 'contact',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		if( ! get_page_by_path('links') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Ligas de interés',
				'post_name'   => 'links',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		if( ! get_page_by_path('about') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Acerca de Olallo Rubio',
				'post_name'   => 'about',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}


	});
