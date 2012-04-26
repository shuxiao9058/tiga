<?php
/**
 * Theme setup
 *
 * @package tiga
 * @since tiga 0.0.1
 */
 
add_action( 'after_setup_theme', 'tiga_setup' );
if ( ! function_exists( 'tiga_setup' ) ):

	function tiga_setup() {
		
		/**
		 * Set the content width based on the theme's design and stylesheet.
		 */
		 if ( ! isset( $content_width ) ) $content_width = 620;
		
		/* Make tiga available for translation.
		 * Translations can be added to the /languages/ directory.
		 * If you're building a theme based on tiga, use a find and replace
		 * to change 'tiga' to the name of your theme in all the template files.
		 */
		 load_theme_textdomain( 'tiga', get_template_directory() . '/library/languages' );

			$locale = get_locale();
			$locale_file = get_template_directory() . "/library/languages/$locale.php";
			if ( is_readable( $locale_file ) )
				require_once( $locale_file );
				
		// This theme styles the visual editor with editor-style.css to match the theme style.
		add_editor_style('library/css/editor-style.css');
		
		// Add default posts and comments RSS feed links to <head>.
		add_theme_support( 'automatic-feed-links' );
		
		// Add support for custom backgrounds
		add_custom_background();
		
		// Add support for a variety of post formats
		add_theme_support( 'post-formats', array( 'aside', 'link', 'gallery', 'quote', 'image' ) );
		
		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( 
			array(
				'primary' => __( 'Primary Navigation', 'tiga' ),
				'secondary' => __( 'Secondary Navigation', 'tiga' )
			) 
		);
		
		// This theme uses Featured Images (also known as post thumbnails)
		add_theme_support( 'post-thumbnails' );
		// Add custom image sizes
		add_image_size( '140px' , 140, 140, true ); // 140px thumbnail
		add_image_size( '300px' , 300, 130, true ); // 300px thumbnail
		add_image_size( '700px' , 700, 300, true ); // 700px thumbnail
		add_image_size( '620px' , 620, 350, true ); // 620px thumbnail
		
	}
endif; // end tiga_setup