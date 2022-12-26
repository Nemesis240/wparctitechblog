<?php
/**
 * Coolest Blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Coolest Blog
 */

add_theme_support( 'title-tag' );

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'register_block_style' );

add_theme_support( 'register_block_pattern' );

add_theme_support( 'responsive-embeds' );

add_theme_support( 'wp-block-styles' );

add_theme_support( 'align-wide' );

add_theme_support(
	'html5',
	array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	)
);

add_theme_support(
	'custom-logo',
	array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	)
);

if ( ! function_exists( 'coolest_blog_setup' ) ) :
	function coolest_blog_setup() {
		/*
		* Make child theme available for translation.
		* Translations can be filed in the /languages/ directory.
		*/
		load_child_theme_textdomain( 'coolest-blog', get_stylesheet_directory() . '/languages' );
	}
endif;
add_action( 'after_setup_theme', 'coolest_blog_setup' );

if ( ! function_exists( 'coolest_blog_enqueue_styles' ) ) :
	/**
	 * Enqueue scripts and styles.
	 */
	function coolest_blog_enqueue_styles() {
		$parenthandle = 'cool-blog-style';
		$theme        = wp_get_theme();

		wp_enqueue_style(
			$parenthandle,
			get_template_directory_uri() . '/style.css',
			array(
				'cool-blog-fonts',
				'cool-blog-slick-style',
				'cool-blog-fontawesome-style',
				'cool-blog-blocks-style',
			),
			$theme->parent()->get( 'Version' )
		);

		wp_enqueue_style(
			'coolest-blog-style',
			get_stylesheet_uri(),
			array( $parenthandle ),
			$theme->get( 'Version' )
		);

	}

endif;

add_action( 'wp_enqueue_scripts', 'coolest_blog_enqueue_styles' );

function coolest_blog_load_custom_wp_admin_style() {
	?>
	<style type="text/css">

		.ocdi p.about-description {
			display: none !important;
		}

	</style>

	<?php
}
add_action( 'admin_enqueue_scripts', 'coolest_blog_load_custom_wp_admin_style' );

require get_theme_file_path() . '/inc/customizer.php';
