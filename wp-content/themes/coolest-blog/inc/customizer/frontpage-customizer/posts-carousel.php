<?php
/**
 * Adore Themes Customizer
 *
 * @package Coolest Blog
 *
 * Posts Carousel Section
 */

$wp_customize->add_section(
	'coolest_blog_posts_carousel_section',
	array(
		'title'    => esc_html__( 'Posts Carousel Section', 'coolest-blog' ),
		'panel'    => 'cool_blog_frontpage_panel',
		'priority' => 25,
	)
);

// Posts Carousel enable setting.
$wp_customize->add_setting(
	'coolest_blog_posts_carousel_section_enable',
	array(
		'default'           => false,
		'sanitize_callback' => 'cool_blog_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new Coolest_Blog_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'coolest_blog_posts_carousel_section_enable',
		array(
			'label'    => esc_html__( 'Enable Posts Carousel Section', 'coolest-blog' ),
			'type'     => 'checkbox',
			'settings' => 'coolest_blog_posts_carousel_section_enable',
			'section'  => 'coolest_blog_posts_carousel_section',
		)
	)
);

// Posts Carousel title settings.
$wp_customize->add_setting(
	'coolest_blog_posts_carousel_title',
	array(
		'default'           => __( 'Posts Carousel', 'coolest-blog' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'coolest_blog_posts_carousel_title',
	array(
		'label'           => esc_html__( 'Section Title', 'coolest-blog' ),
		'section'         => 'coolest_blog_posts_carousel_section',
		'active_callback' => 'coolest_blog_if_posts_carousel_enabled',
	)
);

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'coolest_blog_posts_carousel_title',
		array(
			'selector'            => '.post-carousel-section h3.section-title',
			'settings'            => 'coolest_blog_posts_carousel_title',
			'container_inclusive' => false,
			'fallback_refresh'    => true,
			'render_callback'     => 'coolest_blog_posts_carousel_title_text_partial',
		)
	);
}

// Posts Carousel subtitle settings.
$wp_customize->add_setting(
	'coolest_blog_posts_carousel_subtitle',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'coolest_blog_posts_carousel_subtitle',
	array(
		'label'           => esc_html__( 'Section Subtitle', 'coolest-blog' ),
		'section'         => 'coolest_blog_posts_carousel_section',
		'active_callback' => 'coolest_blog_if_posts_carousel_enabled',
	)
);

// posts carousel content type settings.
$wp_customize->add_setting(
	'coolest_blog_posts_carousel_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'cool_blog_sanitize_select',
	)
);

$wp_customize->add_control(
	'coolest_blog_posts_carousel_content_type',
	array(
		'label'           => esc_html__( 'Content type:', 'coolest-blog' ),
		'description'     => esc_html__( 'Choose where you want to render the content from.', 'coolest-blog' ),
		'section'         => 'coolest_blog_posts_carousel_section',
		'type'            => 'select',
		'active_callback' => 'coolest_blog_if_posts_carousel_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'coolest-blog' ),
			'category' => esc_html__( 'Category', 'coolest-blog' ),
		),
	)
);

for ( $i = 1; $i <= 4; $i++ ) {
	// posts carousel post setting.
	$wp_customize->add_setting(
		'coolest_blog_posts_carousel_post_' . $i,
		array(
			'sanitize_callback' => 'cool_blog_sanitize_dropdown_pages',
		)
	);

	$wp_customize->add_control(
		'coolest_blog_posts_carousel_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Post %d', 'coolest-blog' ), $i ),
			'section'         => 'coolest_blog_posts_carousel_section',
			'type'            => 'select',
			'choices'         => cool_blog_get_post_choices(),
			'active_callback' => 'coolest_blog_posts_carousel_section_content_type_post_enabled',
		)
	);

}

// posts carousel category setting.
$wp_customize->add_setting(
	'coolest_blog_posts_carousel_category',
	array(
		'sanitize_callback' => 'cool_blog_sanitize_select',
	)
);

$wp_customize->add_control(
	'coolest_blog_posts_carousel_category',
	array(
		'label'           => esc_html__( 'Category', 'coolest-blog' ),
		'section'         => 'coolest_blog_posts_carousel_section',
		'type'            => 'select',
		'choices'         => cool_blog_get_post_cat_choices(),
		'active_callback' => 'coolest_blog_posts_carousel_section_content_type_category_enabled',
	)
);

/*========================Active Callback==============================*/
function coolest_blog_if_posts_carousel_enabled( $control ) {
	return $control->manager->get_setting( 'coolest_blog_posts_carousel_section_enable' )->value();
}
function coolest_blog_posts_carousel_section_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'coolest_blog_posts_carousel_content_type' )->value();
	return coolest_blog_if_posts_carousel_enabled( $control ) && ( 'post' === $content_type );
}
function coolest_blog_posts_carousel_section_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'coolest_blog_posts_carousel_content_type' )->value();
	return coolest_blog_if_posts_carousel_enabled( $control ) && ( 'category' === $content_type );
}
