<?php
/**
 * Plugin Name:  Custom Post Types
 * Description:  Added custom post types for site musings and dev diaries
 * Version:      0.1.0
 * Author:       Louie Gerodiaz
 * Author URI:   https://louie.dev
 * License:      None
 */

add_action( 'init', function() {
	register_extended_post_type( 'site-musing', [

		# Add the post type to the site's main RSS feed:
		'show_in_feed' => true,

		# Add the post type to the 'Recently Published' section of the dashboard:
		'dashboard_activity' => true,

		# Add some custom columns to the admin screen:
		'admin_cols' => array(
			'published' => array(
				'title'       => 'Published',
				'meta_key'    => 'published_date',
				'date_format' => 'd/m/Y'
			),
		),

	], [

		# Override the base names used for labels:
		'singular' => 'Site Musing',
		'plural'   => 'Site Musings',
		'slug'     => 'site-musings',

  ] );

  register_extended_post_type( 'dev-diaries', [

		# Add the post type to the site's main RSS feed:
		'show_in_feed' => true,

		# Add the post type to the 'Recently Published' section of the dashboard:
		'dashboard_activity' => true,

		# Add some custom columns to the admin screen:
		'admin_cols' => array(
			'published' => array(
				'title'       => 'Published',
				'meta_key'    => 'published_date',
				'date_format' => 'd/m/Y'
			),
		),

	], [

		# Override the base names used for labels:
		'singular' => 'Dev Diary',
		'plural'   => 'Dev Diaries',
		'slug'     => 'dev-diaries',

	] );
} );
