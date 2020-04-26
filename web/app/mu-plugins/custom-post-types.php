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

    # Menu icon for extra personality
    'menu_icon' => 'dashicons-heart',

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
			'tag' => array(
        'title'    => 'Tags',
				'taxonomy' => 'tag'
			)
		),
    
    # Enable Guternberg editor
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'author'),

	], [

		# Override the base names used for labels:
		'singular' => 'Site Musing',
		'plural'   => 'Site Musings',
		'slug'     => 'site-musings',

  ] );

  register_extended_taxonomy( 'site-musing_tag', 'site-musing', array(
  
    # Show this taxonomy in the 'At a Glance' dashboard widget:
    'dashboard_glance' => true,

    # Show this taxonomy on Gutenberg editor
    'show_in_rest' => true,
  
    # Add a custom column to the admin screen:
    'admin_cols' => array(
      'updated' => array(
        'title'       => 'Updated',
        'meta_key'    => 'updated_date',
        'date_format' => 'd/m/Y'
      ),
    ),
  
  ), array(
  
    # Override the base names used for labels:
    'singular' => 'Tag',
    'plural'   => 'Tags',
    'slug'     => 'tags'
  
  ) );

  register_extended_post_type( 'dev-diaries', [

    # Menu icon for extra personality
    'menu_icon' => 'dashicons-book-alt',

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
			'tag' => array(
        'title'    => 'Tags',
				'taxonomy' => 'tag'
			)
    ),
    
    # Enable Guternberg editor
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'author'),

	], [

		# Override the base names used for labels:
		'singular' => 'Dev Diary',
		'plural'   => 'Dev Diaries',
		'slug'     => 'dev-diaries',

  ] );
  
  register_extended_taxonomy( 'dev-diaries_tag', 'dev-diaries', array(
  
    # Show this taxonomy in the 'At a Glance' dashboard widget:
    'dashboard_glance' => true,

    # Show this taxonomy on Gutenberg editor
    'show_in_rest' => true,
  
    # Add a custom column to the admin screen:
    'admin_cols' => array(
      'updated' => array(
        'title'       => 'Updated',
        'meta_key'    => 'updated_date',
        'date_format' => 'd/m/Y'
      ),
    ),
  
  ), array(
  
    # Override the base names used for labels:
    'singular' => 'Tag',
    'plural'   => 'Tags',
    'slug'     => 'tags'
  
  ) );

} );

# Disabling default post in the admin menu. This actual post type is stil accessible though
add_action('admin_menu', function (){
  remove_menu_page('edit.php');
});
