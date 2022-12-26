<?php

function coolest_blog_customize_register( $wp_customize ) {

	class Coolest_Blog_Toggle_Checkbox_Custom_control extends WP_Customize_Control {
		public $type = 'toogle_checkbox';

		public function render_content() {
			?>
		<div class="checkbox_switch">
			<div class="onoffswitch">
				<input type="checkbox" id="<?php echo esc_attr( $this->id ); ?>" name="<?php echo esc_attr( $this->id ); ?>" class="onoffswitch-checkbox" value="<?php echo esc_attr( $this->value() ); ?>" 
													<?php
													$this->link();
													checked( $this->value() );
													?>
				>
				<label class="onoffswitch-label" for="<?php echo esc_attr( $this->id ); ?>"></label>
			</div>
			<span class="customize-control-title onoffswitch_label"><?php echo esc_html( $this->label ); ?></span>
			<p><?php echo wp_kses_post( $this->description ); ?></p>
		</div>
			<?php
		}
	}

	// customizer section.
	require get_theme_file_path() . '/inc/customizer/frontpage-customizer/posts-carousel.php';

}
add_action( 'customize_register', 'coolest_blog_customize_register' );

function coolest_customize_preview_js() {
	wp_enqueue_script( 'coolest-blog-customizer', get_stylesheet_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview', 'cool-blog-customizer' ), true );
}
add_action( 'customize_preview_init', 'coolest_customize_preview_js' );

function coolest_custom_control_scripts() {
	wp_enqueue_style( 'blogin-customize-controls', get_theme_file_uri() . '/assets/css/customize-controls.css' );
	wp_enqueue_script( 'coolest-blog-custom-controls-js', get_stylesheet_directory_uri() . '/assets/js/customize-control.js', array( 'cool-blog-customize-control', 'jquery', 'jquery-ui-core' ), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'coolest_custom_control_scripts' );
