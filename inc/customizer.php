<?php
/**
 * underscore Theme Customizer
 *
 * @package underscore
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function pob_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'pob_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'pob_customize_partial_blogdescription',
		) );
	}
	// Add theme options panel.

	$wp_customize->add_panel( 'pob', array(
		'title'           => esc_html__( 'Theme Options', 'pob' ),
	) );

	/**
	 * Top-slide  section.
	 */

	/*$wp_customize->add_section( 'top_slide', array(
		'title' => esc_html__( 'Top slider', 'pob' ),
		'panel' => 'pob',
	) );

	$wp_customize->add_setting( 'top_slide_title', array(
		'default'           => 'Hello',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( 'top_slide_title', array(
		'label' => esc_html__( 'Slide title', 'pob' ),
		'section' => 'top_slide',
		'type' => 'text',
		'description'     => esc_html__( 'Display title of theme in Slider.', 'pob' ),
	) );

	$wp_customize->add_setting( 'top_slide_description', array(
		'default'           => 'Grow Your Business',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( 'top_slide_description', array(
		'label' => esc_html__( 'Slide description', 'pob' ),
		'section' => 'top_slide',
		'type' => 'textarea',
		'description'     => esc_html__( 'Display description of theme in Slider.', 'pob' ),
	) );

	$wp_customize->add_setting( 'top_slide_text', array(
		'default'           => 'Convert Visitors Into Customers And Generate More Sales',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( 'top_slide_text', array(
		'label' => esc_html__( 'Slide text', 'pob' ),
		'section' => 'top_slide',
		'type' => 'textarea',
		'description'     => esc_html__( 'Display text of theme in Slider.', 'pob' ),
	) );

	$wp_customize->add_setting( 'top_slide_button_text_1', array(
		'default'           => 'view features',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( 'top_slide_button_text_1', array(
		'label' => esc_html__( 'Slide button text 1', 'pob' ),
		'section' => 'top_slide',
		'type' => 'text',
		'description'     => esc_html__( 'Display button of theme in Slider.', 'pob' ),
	) );

	$wp_customize->add_setting( 'top_slide_button_link_1', array(
		'default'           => 'https://www.facebook.com/',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( 'top_slide_button_link_1', array(
		'label' => esc_html__( 'Slide button link 1', 'pob' ),
		'section' => 'top_slide',
		'type' => 'url',
		'description'     => esc_html__( 'Display button of theme in Slider.', 'pob' ),
	) );

	$wp_customize->add_setting( 'top_slide_button_text_2', array(
		'default'           => 'view features',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( 'top_slide_button_text_2', array(
		'label' => esc_html__( 'Slide button text 2', 'pob' ),
		'section' => 'top_slide',
		'type' => 'text',
		'description'     => esc_html__( 'Display button of theme in Slider.', 'pob' ),
	) );


	$wp_customize->add_setting( 'top_slide_button_link_2', array(
		'default'           => 'https://www.facebook.com/',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( 'top_slide_button_link_2', array(
		'label' => esc_html__( 'Slide button link 2', 'pob' ),
		'section' => 'top_slide',
		'type' => 'url',
		'description'     => esc_html__( 'Display button of theme in Slider.', 'pob' ),
	) );

	$default_image_1 = get_template_directory_uri() . '/images/slide.jpg';

	$wp_customize->add_setting( 'top_slide_img_1', array(
		'transport'       => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'top_slide_img_1',
		array(
			'label'         => 'Image for Slider 1',
			'description'   => 'Recommended size: 1306x667 pixels.',
			'section'       => 'top_slide',
			'setting'       => 'top_slide_img_1',
		)
	) );

	$default_image_2 = get_template_directory_uri() . '/images/instagram2.jpg';

	$wp_customize->add_setting( 'top_slide_img_2', array(
		'transport'       => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'top_slide_img_2',
		array(
			'label'         => 'Image for Slider 2',
			'description'   => 'Recommended size: 1306x667 pixels.',
			'section'       => 'top_slide',
			'setting'       => 'top_slide_img_2',
		)
	) );*/

	/**
	 * Features  section.
	 */

	$wp_customize->add_section( 'features', array(
		'title' => esc_html__( 'Features', 'pob' ),
		'panel' => 'pob',
	) );
	for( $i = 1; $i <= 3; $i++){
		$wp_customize->add_setting( 'feature_title_'.$i, array(
		'default'           => 'FULLY RESPONSIVE',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( 'feature_title_'.$i, array(
		'label' => esc_html__( 'Feature title '.$i, 'pob' ),
		'section' => 'features',
		'type' => 'text',
		'description'     => esc_html__( 'Display title of theme in features.', 'pob' ),
	) );

	$wp_customize->add_setting( 'feature_text_'.$i, array(
		'default'           => 'This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel veliactor aliquenean sollicitu. This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel veliau ctor aliquenean sollicitu nostrud.',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( 'feature_text_'.$i, array(
		'label' => esc_html__( 'Feature text '.$i, 'pob' ),
		'section' => 'features',
		'type' => 'textarea',
		'description'     => esc_html__( 'Display text of theme in features.', 'pob' ),
	) );
	}



	/**
	 * Projects slider  section.
	 */

	$wp_customize->add_section( 'project_slider', array(
		'title' => esc_html__( 'Project slider', 'pob' ),
		'panel' => 'pob',
	) );

	$wp_customize->add_setting( 'project_slider_title', array(
		'default'           => 'tons of cool shortcodes',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' 		=> 'refresh',
	) );

	$wp_customize->add_control( 'project_slider_title', array(
		'label' 		=> esc_html__( 'Slider title', 'pob' ),
		'section' 		=> 'project_slider',
		'type' 			=> 'text',
		'description'   => esc_html__( 'Display project slider title', 'pob' ),
	) );

	$wp_customize->add_setting( 'project_slider_description', array(
		'default'           => 'Elated Themes provide a large collection of elements and shortcodes.Create any layout combination you can imagine.',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' 		=> 'refresh',
	) );

	$wp_customize->add_control( 'project_slider_description', array(
		'label' 		=> esc_html__( 'Slider description', 'pob' ),
		'section' 		=> 'project_slider',
		'type' 			=> 'textarea',
		'description'   => esc_html__( 'Display project slider description', 'pob' ),
	) );

	$wp_customize->add_setting( 'project_slider_number', array(
		'default'           => 4,
		'sanitize_callback' => 'sanitize_text_field',
		'transport' 		=> 'refresh',
	) );

	/*lay tong so post cua category co id=6*/
	$cat = get_category(6);
	$arr = array();
	for($i=3;$i<=$cat->count;$i++){
		$arr[$i] = $i;
	}
	$wp_customize->add_control( 'project_slider_number', array(
		'label' 		=> esc_html__( 'Slider number', 'pob' ),
		'section' 		=> 'project_slider',
		'type' 			=> 'select',
		'choices'   	=> $arr,
		'description'   => esc_html__( 'Display slider', 'pob' ),
	) );

	/**
	 * Progress  section.
	 */

	$wp_customize->add_section( 'progress', array(
		'title' => esc_html__( 'Progress', 'pob' ),
		'panel' => 'pob',
	) );

	$wp_customize->add_setting( 'progress_title', array(
		'default'           => 'mexo design. Who we are & what we do',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( 'progress_title', array(
		'label' => esc_html__( 'Progress title', 'pob' ),
		'section' => 'progress',
		'type' => 'text',
		'description'     => esc_html__( 'Display progress title.', 'pob' ),
	) );
	$wp_customize->add_setting( 'progress_text', array(
		'default'           => 'The team have invested considerable time in reviewing and providing feedback on your submission. If we feel that you have not',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( 'progress_text', array(
		'label' => esc_html__( 'Progress text', 'pob' ),
		'section' => 'progress',
		'type' => 'textarea',
		'description'     => esc_html__( 'Display progress text.', 'pob' ),
	) );
	for ( $i = 1; $i <= 4; $i ++ ) {
		$wp_customize->add_setting( 'progress_text_name_'.$i, array(
			'default'           => 'lines of code',
			'sanitize_callback' => 'sanitize_text_field',
			'transport' => 'refresh',
		) );

		$wp_customize->add_control( 'progress_text_name_'.$i, array(
			'label' => esc_html__( 'Progress text name '.$i, 'pob' ),
			'section' => 'progress',
			'type' => 'text',
			'description'     => esc_html__( 'Display progress text name 1.', 'pob' ),
		) );
		$wp_customize->add_setting( 'progress_text_percent_'.$i, array(
			'default'           => '85',
			'sanitize_callback' => 'sanitize_text_field',
			'transport' => 'refresh',
		) );

		$wp_customize->add_control( 'progress_text_percent_'.$i, array(
			'label' => esc_html__( 'Progress text percent '.$i, 'pob' ),
			'section' => 'progress',
			'type' => 'number',
			'description'     => esc_html__( 'Display progress text name '.$i, 'pob' ),
		) );
	}// End for()
	$wp_customize->add_setting( 'progress_image', array(
		'transport'       => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'progress_image',
		array(
			'label'         => 'Image for Progress',
			'description'   => '',
			'section'       => 'progress',
			'setting'       => 'progress_image',
		)
	) );

	/**
	 * Images  section.
	 */

	$wp_customize->add_section( 'images', array(
		'title' => esc_html__( 'Images', 'pob' ),
		'panel' => 'pob',
	) );
	for( $i = 1; $i <= 4; $i ++){
		$wp_customize->add_setting( 'image_'.$i, array(
		'transport'       => 'refresh',
	) );
		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'image_'.$i,
			array(
				'label'         => 'Image '.$i,
				'description'   => '',
				'section'       => 'images',
				'setting'       => 'image_'.$i,
			)
		) );
	}

	/**
	 * Footer  section.
	 */

	$wp_customize->add_section( 'footer', array(
		'title' => esc_html__( 'Footer', 'pob' ),
		'panel' => 'pob',
	) );

	$wp_customize->add_setting( 'footer_setting', array(
		'default'           => 'Copyright 2017 @ POB Themes.',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( 'footer_setting', array(
		'label' => esc_html__( 'Copy right', 'pob' ),
		'section' => 'footer',
		'type' => 'textarea',
		'description'     => esc_html__( 'Display information of theme in footer.', 'pob' ),
	) );


}
add_action( 'customize_register', 'pob_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function pob_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function pob_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function underscore_customize_preview_js() {
	wp_enqueue_script( 'underscore-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'underscore_customize_preview_js' );
